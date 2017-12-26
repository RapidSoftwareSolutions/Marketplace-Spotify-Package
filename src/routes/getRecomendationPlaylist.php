<?php

$app->post('/api/Spotify/getRecomendationPlaylist', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken', 'seedArtists', 'seedGenres']);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $requiredParams = ['accessToken'=>'accessToken', 'seedArtists'=>'seed_artists', 'seedGenres'=>'seed_genres', 'seedTracks'=>'seed_tracks'];
    $optionalParams = ['limit'=>'limit','market'=>'market','maxAcousticness'=>'max_acousticness','minAcousticness'=>'min_acousticness','targetAcousticness'=>'target_acousticness','maxDanceability'=>'max_danceability','minDanceability'=>'min_danceability','targetDanceability'=>'target_danceability','maxDurationMs'=>'max_duration_ms','minDurationMs'=>'min_duration_ms','targetDurationMs'=>'target_duration_ms','maxEnergy'=>'max_energy','minEnergy'=>'min_energy','targetEnergy'=>'target_energy','maxInstrumentalness'=>'max_instrumentalness','minInstrumentalness'=>'min_instrumentalness','targetInstrumentalness'=>'target_instrumentalness','maxKey'=>'max_key','minKey'=>'min_key','targetKey'=>'target_key','maxLiveness'=>'max_liveness','minLiveness'=>'min_liveness','targetLiveness'=>'target_liveness','maxLoudness'=>'max_loudness','minLoudness'=>'min_loudness','targetLoudness'=>'target_loudness','mode'=>'mode','maxPopularity'=>'max_popularity','minPopularity'=>'min_popularity','targetPopularity'=>'target_popularity','maxSpeechiness'=>'max_speechiness','minSpeechiness'=>'min_speechiness','targetSpeechiness'=>'target_speechiness','maxTempo'=>'max_tempo','minTempo'=>'min_tempo','targetTempo'=>'target_tempo','maxTimeSignature'=>'maxTimeSignature','minTimeSignature'=>'min_time_signature','targetTimeSignature'=>'target_time_signature','maxValence'=>'max_valence','minValence'=>'min_valence','targetValence'=>'target_valence'];
    $bodyParams = [
       'query' => ['seed_artists', 'seed_tracks', 'seed_genres','max_valence','min_valence','target_valence','max_time_signature','min_time_signature','target_time_signature','max_tempo','min_tempo','target_tempo','max_speechiness','min_speechiness','target_speechiness','max_popularity','min_popularity','target_popularity','mode','target_loudness','target_liveness','target_key','target_instrumentalness','target_energy','target_duration_ms','target_danceability','target_acousticness','max_loudness','min_loudness','max_liveness','min_liveness','max_key','min_key','max_instrumentalness','min_instrumentalness','max_energy','min_energy','max_duration_ms','min_duration_ms','max_danceability','min_danceability','limit','market','max_acousticness','min_acousticness']
    ];

    $data = \Models\Params::createParams($requiredParams, $optionalParams, $post_data['args']);

    

    $client = $this->httpClient;
    $query_str = "https://api.spotify.com/v1/recommendations";

    

    $requestParams = \Models\Params::createRequestBody($data, $bodyParams);
    $requestParams['headers'] = ["Authorization"=>"Bearer {$data['accessToken']}"];
     

    try {
        $resp = $client->get($query_str, $requestParams);
        $responseBody = $resp->getBody()->getContents();

        if(in_array($resp->getStatusCode(), ['200', '201', '202', '203', '204'])) {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
            if(empty($result['contextWrites']['to'])) {
                $result['contextWrites']['to']['status_msg'] = "Api return no results";
            }
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ConnectException $exception) {
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'INTERNAL_PACKAGE_ERROR';
        $result['contextWrites']['to']['status_msg'] = 'Something went wrong inside the package.';

    }

    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});