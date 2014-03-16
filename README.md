#Statamic Spotify Playlist Plugin

The Spotify Playlist plugin for Statamic allows you to embed Spotify playlists based on URIs.

__NOTE:__ This plugin is meant for simple Spotify playlist embeds. Great work has been done by Jason Varga on a much more robust Spotify embedder: <https://github.com/jazonv/Spotify-for-Statamic>. As such, future development of this plugin is highly unlikely.

##Installation
1. Download or clone from github and place in the `_addons` directory.
2. Make sure the folder is named `spotify`.
3. Laugh heartily at your brilliance. 

##Usage
Drop the `{{ spotify }}` tag anywhere your heart desires.

##Parameter
`{{ spotify }}` accepts the following parameter:
 - __uri__: URI for the Spotify playlist (required)
