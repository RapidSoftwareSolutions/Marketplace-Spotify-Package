<?php
$routes = [
    'metadata',
    'getSingleAlbum',
    'getAlbums',
    'getSingleAlbumTracks',
    'getSingleArtist',
    'getArtists',
    'getSingleArtistAlbums',
    'getSingleArtistTopTracks',
    'getSingleArtistRelatedArtists',
    'listFeaturedPlaylists',
    'listNewReleases',
    'listCategories',
    'getSingleCategory',
    'getSingleCategoryPlaylists',
    'getRecomendationPlaylist',
    'getFollowedArtists',
    'followArtists',
    'followUsers',
    'unfollowArtists',
    'unfollowUsers',
    'checkFollowingArtists',
    'checkFollowingUsers',
    'followPlaylist',
    'unfollowPlaylist',
    'checkUserFollowingPlaylist',
    'saveTracks',
    'getSavedTracks',
    'removeSavedTracks',
    'checkSavedTracks',
    'saveAlbums',
    'getSavedAlbums',
    'deleteSavedAlbums',
    'checkSavedAlbums',
    'getMyTopTracks',
    'getMyTopArtists',
    'getRecentlyPlayedTracks',
    'getAvailableDevices',
    'getCurrentPlayback',
    'getCurrentlyPlaying',
    'transferPlayback',
    'startPlayback',
    'pausePlayback',
    'skipPlayback',
    'previousPlayback',
    'seekPosition',
    'repeatPlayback',
    'setVolume',
    'shufflePlayback',
    'getUserPlaylists',
    'getMyPlaylists',
    'getUserSinglePlaylist',
    'getUserSinglePlaylistTracks',
    'createPlaylist',
    'addTracksToPlaylist',
    'removeTracksFromPlaylist',
    'reorderPlaylistTracks',
    'replaceTracksInPlaylist',
    'updatePlaylist',
    'getUserProfile',
    'getMyProfile',
    'search',
    'getSingleTrack',
    'getTracks',
    'getSingleTrackAudioAnalysis',
    'getSingleTrackAudioFeatures',
    'getTracksAudioFeatures'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

