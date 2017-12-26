[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Spotify/functions?utm_source=RapidAPIGitHub_SpotifyFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Spotify Package
Web API lets your applications fetch data from the Spotify music catalog and manage user’s playlists and saved music.
* Domain: [Spotify](http://www.spotify.com/)
* Credentials: clientId

## How to get credentials: 
0. Browse to [Spotify for Developers](https://developer.spotify.com/)
1. Register or log in
2. Browse to [Dashboard](https://beta.developer.spotify.com/dashboard/) to get your clientId



## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 

## Spotify.getSingleAlbum
Retrieve single album information

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| albumId    | String| Id of the album
| market     | String| An ISO 3166-1 alpha-2 country code.

## Spotify.getAlbums
Retrieve several album information

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| albumIds   | List  | Id of the album
| market     | String| An ISO 3166-1 alpha-2 country code.

## Spotify.getSingleAlbumTracks
Retrieve single album tracks information

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| albumId    | String| Id of the album
| limit      | Number| The maximum number of tracks to return. Default: 20. Minimum: 1. Maximum: 50. 
| offset     | Number| The index of the first track to return. Default: 0 (the first object). Use with limit to get the next set of tracks. 
| market     | String| An ISO 3166-1 alpha-2 country code.

## Spotify.getSingleArtist
Retrieve single artist information

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| artistId   | String| Id of the artist

## Spotify.getArtists
Retrieve several artists information

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| artistIds  | List  | Ids of the artists

## Spotify.getSingleArtistAlbums
Retrieve single artist albums information

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| artistId   | String| Id of the artist
| albumTypes | List  | Types of albums
| limit      | Number| The maximum number of albums to return. Default: 20. Minimum: 1. Maximum: 50. 
| offset     | Number| The index of the first album to return. Default: 0 (the first object). Use with limit to get the next set of albums. 
| market     | String| An ISO 3166-1 alpha-2 country code.

## Spotify.getSingleArtistTopTracks
Retrieve single artist top tracksinformation

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| artistId   | String| Id of the artis
| country    | String| An ISO 3166-1 alpha-2 country code.

## Spotify.getSingleArtistRelatedArtists
Retrieve single artist related artists information

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| artistId   | String| Id of the artis

## Spotify.listFeaturedPlaylists
Get a list of Spotify featured playlists

| Field      | Type      | Description
|------------|-----------|----------
| accessToken| String    | accessToken from user
| limit      | Number    | The maximum number of items to return. Default: 20. Minimum: 1. Maximum: 50. 
| offset     | Number    | The index of the first item to return. Default: 0 (the first object). Use with limit to get the next set of items.
| locale     | String    | The desired language, consisting of a lowercase ISO 639 language code and an uppercase ISO 3166-1 alpha-2 country code, joined by an underscore. 
| country    | String    | An ISO 3166-1 alpha-2 country code.
| timestamp  | DatePIcker| A timestamp in ISO 8601 format: yyyy-MM-ddTHH:mm:ss

## Spotify.listNewReleases
Get a list of new album releases featured in Spotify

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| limit      | Number| The maximum number of items to return. Default: 20. Minimum: 1. Maximum: 50. 
| offset     | Number| The index of the first item to return. Default: 0 (the first object). Use with limit to get the next set of items. 
| country    | String| An ISO 3166-1 alpha-2 country code.

## Spotify.listCategories
Get a list of categories used to tag items in Spotify

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| limit      | Number| The maximum number of items to return. Default: 20. Minimum: 1. Maximum: 50. 
| offset     | Number| The index of the first item to return. Default: 0 (the first object). Use with limit to get the next set of items.
| locale     | String| The desired language, consisting of a lowercase ISO 639 language code and an uppercase ISO 3166-1 alpha-2 country code, joined by an underscore. 
| country    | String| An ISO 3166-1 alpha-2 country code.

## Spotify.getSingleCategory
Get a single category used to tag items in Spotify 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| categoryId | String| Id of the category
| locale     | String| The desired language, consisting of a lowercase ISO 639 language code and an uppercase ISO 3166-1 alpha-2 country code, joined by an underscore. 
| country    | String| An ISO 3166-1 alpha-2 country code.

## Spotify.getSingleCategoryPlaylists
Get a single category used to tag items in Spotify 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| categoryId | String| Id of the category
| country    | String| An ISO 3166-1 alpha-2 country code.
| limit      | Number| The maximum number of items to return. Default: 20. Minimum: 1. Maximum: 50. 
| offset     | Number| The index of the first item to return. Default: 0 (the first object). Use with limit to get the next set of items.

## Spotify.getRecomendationPlaylist
Create a playlist-style listening experience based on seed artists, tracks and genres.

| Field                 | Type  | Description
|-----------------------|-------|----------
| accessToken           | String| accessToken from user
| limit                 | Number| The target size of the list of recommended tracks.
| market                | String| An ISO 3166-1 alpha-2 country code.
| maxAcousticness       | String| A confidence measure from 0.0 to 1.0 of whether the track is acoustic.
| minAcousticness       | String| A confidence measure from 0.0 to 1.0 of whether the track is acoustic.
| targetAcousticness    | String| A confidence measure from 0.0 to 1.0 of whether the track is acoustic.
| maxDanceability       | String| Danceability describes how suitable a track is for dancing based on a combination of musical elements including tempo, rhythm stability, beat strength, and overall regularity. 
| minDanceability       | String| Danceability describes how suitable a track is for dancing based on a combination of musical elements including tempo, rhythm stability, beat strength, and overall regularity. 
| targetDanceability    | String| Danceability describes how suitable a track is for dancing based on a combination of musical elements including tempo, rhythm stability, beat strength, and overall regularity. 
| maxDurationMs         | Number| The duration of the track in milliseconds.
| minDurationMs         | Number| The duration of the track in milliseconds.
| targetDurationMs      | Number| The duration of the track in milliseconds.
| maxEnergy             | String| Energy is a measure from 0.0 to 1.0 and represents a perceptual measure of intensity and activity.
| minEnergy             | String| Energy is a measure from 0.0 to 1.0 and represents a perceptual measure of intensity and activity.
| targetEnergy          | String| Energy is a measure from 0.0 to 1.0 and represents a perceptual measure of intensity and activity.
| maxInstrumentalness   | String| Predicts whether a track contains no vocals. 
| minInstrumentalness   | String| Predicts whether a track contains no vocals. 
| targetInstrumentalness| String| Predicts whether a track contains no vocals. 
| maxKey                | Number| The key the track is in. Integers map to pitches using standard Pitch Class notation.
| minKey                | Number| The key the track is in. Integers map to pitches using standard Pitch Class notation.
| targetKey             | Number| The key the track is in. Integers map to pitches using standard Pitch Class notation.
| maxLiveness           | String| Detects the presence of an audience in the recording. 
| minLiveness           | String| Detects the presence of an audience in the recording. 
| targetLiveness        | String| Detects the presence of an audience in the recording. 
| maxLoudness           | String| The overall loudness of a track in decibels (dB). 
| minLoudness           | String| The overall loudness of a track in decibels (dB). 
| targetLoudness        | String| The overall loudness of a track in decibels (dB). 
| mode                  | Select| Mode indicates the modality (major or minor) of a track, the type of scale from which its melodic content is derived. Major is represented by 1 and minor is 0.
| maxPopularity         | Number| The popularity of the track. The value will be between 0 and 100, with 100 being the most popular.
| minPopularity         | Number| The popularity of the track. The value will be between 0 and 100, with 100 being the most popular.
| targetPopularity      | Number| The popularity of the track. The value will be between 0 and 100, with 100 being the most popular.
| maxSpeechiness        | String| Speechiness detects the presence of spoken words in a track. The more exclusively speech-like the recording (e.g. talk show, audio book, poetry), the closer to 1.0 the attribute value. 
| minSpeechiness        | String| Speechiness detects the presence of spoken words in a track. The more exclusively speech-like the recording (e.g. talk show, audio book, poetry), the closer to 1.0 the attribute value. 
| targetSpeechiness     | String| Speechiness detects the presence of spoken words in a track. The more exclusively speech-like the recording (e.g. talk show, audio book, poetry), the closer to 1.0 the attribute value. 
| maxTempo              | String| The overall estimated tempo of a track in beats per minute (BPM).
| minTempo              | String| The overall estimated tempo of a track in beats per minute (BPM).
| targetTempo           | String| The overall estimated tempo of a track in beats per minute (BPM).
| maxTimeSignature      | String| An estimated overall time signature of a track. 
| minTimeSignature      | String| An estimated overall time signature of a track. 
| targetTimeSignature   | String| An estimated overall time signature of a track. 
| maxValence            | String| A measure from 0.0 to 1.0 describing the musical positiveness conveyed by a track. 
| minValence            | String| A measure from 0.0 to 1.0 describing the musical positiveness conveyed by a track. 
| targetValence         | String| A measure from 0.0 to 1.0 describing the musical positiveness conveyed by a track. 

## Spotify.getFollowedArtists
Get the current user’s followed artists

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| limit      | Number| The maximum number of items to return. Default: 20. Minimum: 1. Maximum: 50. 
| after      | String| The last artist ID retrieved from the previous request.
| type       | Select| The ID type: currently only artist is supported.

## Spotify.followArtists
Add the current user as a follower of one or more artists 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| artistIds  | List  | Id of the artist

## Spotify.followUsers
Add the current user as a follower of one or more Spotify users 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| userIds    | List  | Id of the user

## Spotify.unfollowArtists
Rewmove the current user as a follower of one or more artists 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| artistIds  | List  | Id of the artist

## Spotify.unfollowUsers
Remove the current user as a follower of one or more Spotify users 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| userIds    | List  | Id of the user

## Spotify.checkFollowingArtists
Check to see if the current user is following one or more artists

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| artistIds  | List  | Id of the artist


## Spotify.followPlaylist
Add the current user as a follower of a playlist.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| ownerId    | String| The Spotify user ID of the person who owns the playlist.
| playlistId | String| The Spotify ID of the playlist. Any playlist can be followed, regardless of its public/private status, as long as you know its playlist ID
| public     | Select| If true the playlist will be included in user's public playlists, if false it will remain private.

## Spotify.unfollowPlaylist
Remove the current user as a follower of a playlist.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| ownerId    | String| The Spotify user ID of the person who owns the playlist.
| playlistId | String| The Spotify ID of the playlist.

## Spotify.checkUserFollowingPlaylist
Check to see if one or more Spotify users are following a specified playlist.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| ownerId    | String| The Spotify user ID of the person who owns the playlist.
| playlistId | String| The Spotify ID of the playlist.
| userIds    | List  | Id of the user

## Spotify.saveTracks
Save one or more tracks to the current user’s “Your Music” library.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| trackIds   | List  | Id of the track

## Spotify.getSavedTracks
Get tracks from the current user’s “Your Music” library.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| limit      | Number| The maximum number of tracks to return. Default: 20. Minimum: 1. Maximum: 50. 
| offset     | Number| The index of the first track to return. Default: 0 (the first object). Use with limit to get the next set of tracks. 
| market     | String| An ISO 3166-1 alpha-2 country code.

## Spotify.removeSavedTracks
Remove one or more tracks from the current user’s “Your Music” library.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| trackIds   | List  | Id of the track

## Spotify.checkSavedTracks
Check if one or more tracks is already saved in the current Spotify user’s “Your Music” library

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| trackIds   | List  | Id of the track

## Spotify.saveAlbums
Save one or more albums to the current user’s “Your Music” library.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| albumIds   | List  | Id of the album

## Spotify.getSavedAlbums
Get albums from the current user’s “Your Music” library.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| limit      | Number| The maximum number of albums to return. Default: 20. Minimum: 1. Maximum: 50. 
| offset     | Number| The index of the first album to return. Default: 0 (the first object). Use with limit to get the next set of albums.
| market     | String| An ISO 3166-1 alpha-2 country code.

## Spotify.deleteSavedAlbums
Delete one or more albums from the current user’s “Your Music” library.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| albumIds   | List  | Id of the album

## Spotify.checkSavedAlbums
Check if one or more albums is already saved in the current Spotify user’s “Your Music” library.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| albumIds   | List  | Id of the album

## Spotify.getMyTopTracks
Get the current user’s top tracks based on calculated affinity.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| limit      | Number| The maximum number of tracks to return. Default: 20. Minimum: 1. Maximum: 50. 
| offset     | Number| The index of the first track to return. Default: 0 (the first object). Use with limit to get the next set of tracks.
| timeRange  | Select| Over what time frame the affinities are computed. 

## Spotify.getMyTopArtists
Get the current user’s top artists based on calculated affinity.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| limit      | Number| The maximum number of artists to return. Default: 20. Minimum: 1. Maximum: 50. 
| offset     | Number| The index of the first artist to return. Default: 0 (the first object). Use with limit to get the next set of artists.
| timeRange  | Select| Over what time frame the affinities are computed. 

## Spotify.getRecentlyPlayedTracks
Get tracks from the current user’s recently played tracks.

| Field      | Type      | Description
|------------|-----------|----------
| accessToken| String    | accessToken from user
| limit      | Number    | The maximum number of tracks to return. Default: 20. Minimum: 1. Maximum: 50. 
| after      | DatePicker| Returns all items after (but not including) this cursor position. 
| before     | DatePicker| Returns all items before (but not including) this cursor position. 

## Spotify.getAvailableDevices
Get information about a user’s available devices.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user

## Spotify.getCurrentPlayback
Get information about the user’s current playback state, including track, track progress, and active device.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| market     | String| An ISO 3166-1 alpha-2 country code.

## Spotify.getCurrentlyPlaying
Get the object currently being played on the user’s Spotify account.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| market     | String| An ISO 3166-1 alpha-2 country code.

## Spotify.transferPlayback
Transfer playback to a new device and determine if it should start playing.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| deviceIds  | List  | Id of the devices
| play       | Select| Ensure playback happens or not on new device.

## Spotify.startPlayback
Start a new context or resume current playback on the user’s active device.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| deviceId   | String| The id of the device this command is targeting. If not supplied, the user's currently active device is the target.
| uris       | List  | uris
| contextUri | String| Spotify URI of the context to play. Valid contexts are albums, artists & playlists.
| offset     | String| Indicates from where in the context playback should start

## Spotify.pausePlayback
Pause a new context or resume current playback on the user’s active device.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| deviceId   | String| The id of the device this command is targeting. If not supplied, the user's currently active device is the target.

## Spotify.skipPlayback
Skips to next track in the user’s queue.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| deviceId   | String| The id of the device this command is targeting. If not supplied, the user's currently active device is the target.

## Spotify.previousPlayback
Skips to previous track in the user’s queue.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| deviceId   | String| The id of the device this command is targeting. If not supplied, the user's currently active device is the target.

## Spotify.seekPosition
Seeks to the given position in the user’s currently playing track.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| positionMs | Number| The position in milliseconds to seek to. 
| deviceId   | String| The id of the device this command is targeting. If not supplied, the user's currently active device is the target.

## Spotify.repeatPlayback
Set the repeat mode for the user’s playback. Options are repeat-track, repeat-context, and off.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| state      | Select| track will repeat the current track. context will repeat the current context. off will turn repeat off.
| deviceId   | String| The id of the device this command is targeting. If not supplied, the user's currently active device is the target.

## Spotify.setVolume
Set the volume for the user’s current playback device.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| accessToken from user
| volumePercent| Number| The volume to set. Must be a value from 0 to 100 inclusive.
| deviceId     | String| The id of the device this command is targeting. If not supplied, the user's currently active device is the target.

## Spotify.shufflePlayback
Toggle shuffle on or off for user’s playback.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| state      | Select| true: Shuffle user's playback false: Do not shuffle user's playback
| deviceId   | String| The id of the device this command is targeting. If not supplied, the user's currently active device is the target.

## Spotify.getUserPlaylists
Get a list of the playlists owned or followed by a Spotify user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| userId     | String| The user's Spotify user ID.
| limit      | Number| The maximum number of items to return. Default: 20. Minimum: 1. Maximum: 50. 
| offset     | Number| The index of the first item to return. Default: 0 (the first object).

## Spotify.getMyPlaylists
Get a list of the playlists owned or followed by current Spotify user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| limit      | Number| The maximum number of items to return. Default: 20. Minimum: 1. Maximum: 50. 
| offset     | Number| The index of the first item to return. Default: 0 (the first object).

## Spotify.getUserSinglePlaylist
Get a playlist owned by a Spotify user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| userId     | String| The user's Spotify user ID.
| playlistId | String| Id of the playlist
| fields     | List  | Filters for the query:
| market     | String| An ISO 3166-1 alpha-2 country code.

## Spotify.getUserSinglePlaylistTracks
Get full details of the tracks of a playlist owned by a Spotify user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| userId     | String| The user's Spotify user ID.
| playlistId | String| Id of the playlist
| fields     | List  | Filters for the query:
| market     | String| An ISO 3166-1 alpha-2 country code.
| limit      | Number| The maximum number of items to return. Default: 20. Minimum: 1. Maximum: 50. 
| offset     | Number| The index of the first item to return. Default: 0 (the first object).

## Spotify.createPlaylist
Create new playlist

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| accessToken from user
| userId       | String| The user's Spotify user ID.
| name         | String| Name of the playlist
| public       | Select| If true the playlist will be included in user's public playlists, if false it will remain private.
| collaborative| Select| If true the playlist will be collaborative. 
| description  | String| Description of the playlist

## Spotify.addTracksToPlaylist
Add one or more tracks to a user’s playlist.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| userId     | String| The user's Spotify user ID.
| playlistId | String| Id of the playlist
| uris       | List  | A list of Spotify track URIs to add.
| position   | Number| The position to insert the tracks, a zero-based index

## Spotify.removeTracksFromPlaylist
Remove one or more tracks from a user’s playlist.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| userId     | String| The user's Spotify user ID.
| playlistId | String| Id of the playlist
| tracks     | List  | A list of Spotify track URIs to remove.

## Spotify.reorderPlaylistTracks
Reorder a track or a group of tracks in a playlist.

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| accessToken from user
| userId      | String| The user's Spotify user ID.
| playlistId  | String| Id of the playlist
| rangeStart  | Number| The position of the first track to be reordered.
| rangeLength | Number| The amount of tracks to be reordered. Defaults to 1 if not set.
| insertBefore| Number| The position where the tracks should be inserted. 
| snapshotId  | String| The playlist's snapshot ID against which you want to make the changes.

## Spotify.replaceTracksInPlaylist
Replace all the tracks in a playlist, overwriting its existing tracks.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| userId     | String| The user's Spotify user ID.
| playlistId | String| Id of the playlist
| uris       | List  | A list of Spotify track URIs to add.

## Spotify.updatePlaylist
Replace all the tracks in a playlist, overwriting its existing tracks.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| accessToken from user
| userId       | String| The user's Spotify user ID.
| playlistId   | String| Id of the playlist
| name         | String| Name of the playlist
| public       | Select| If true the playlist will be included in user's public playlists, if false it will remain private.
| collaborative| Select| If true the playlist will be collaborative. 
| description  | String| Description of the playlist

## Spotify.getUserProfile
Get public profile information about a Spotify user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| userId     | String| The user's Spotify user ID.

## Spotify.getMyProfile
Get public profile information about current Spotify user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user

## Spotify.search
Get Spotify catalog information about artists, albums, tracks or playlists that match a keyword string.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| q          | String| The search query's keywords (and optional field filters and operators)
| type       | List  | A list of item types to search across. 
| market     | String| An ISO 3166-1 alpha-2 country code.
| limit      | Number| The maximum number of item to return. Default: 20. Minimum: 1. Maximum: 50. 
| offset     | Number| The index of the first item to return. Default: 0 (the first object). Use with limit to get the next set of itemss. 

## Spotify.getSingleTrack
Retrieve single track information

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| trackId    | String| Id of the track
| market     | String| An ISO 3166-1 alpha-2 country code.

## Spotify.getTracks
Retrieve several tracks information

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| trackIds   | List  | Id of the tracks
| market     | String| An ISO 3166-1 alpha-2 country code.

## Spotify.getSingleTrackAudioAnalysis
Get a detailed audio analysis for a single track identified by its unique Spotify ID

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| trackId    | String| Id of the track

## Spotify.getSingleTrackAudioFeatures
Get audio feature information for a single track identified by its unique Spotify ID.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| trackId    | String| Id of the track

## Spotify.getTracksAudioFeatures
Get audio feature information for several tracks identified by its unique Spotify ID.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| accessToken from user
| trackIds   | List  | Id of the tracks

