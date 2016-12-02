##setup
add this to providers:

    ffy\rooms\RoomServiceProvider::class

##package logic:
* a user enters the main room.
* in every room he can communicate with other users
* he can go to any room -> middleware changes room
* he can password protect a room if he is first there
* he can lock the room for new people to enter or...
* ... to interact in that room
 
##todos
* css
* ~~controller~~
* middleware
* vue.js
* publish to right place
* user room-walk trait