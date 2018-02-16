<?php

return [ 
		// Facebook Token Test movierecsys
		'facebook_token' => 'EAACkzauyGUUBAH5xRhy4BNXFqIJV9H73N8DFy1KjMVw11UYNCsbn0DzMztJ1D92xTKlr1DEDIwMky896MgCE6ZBd1ZAUf2ZChr80auQ9MwZBL4fprZAa4ukjDzDaxtzC0Rle0omuLnszdBBgCGZAxp1gK3lSLnvD1ZCMmAXSotRnQZDZD',
		// Telegram Token TestMovieRecSys
		'telegram_token' => '480345760:AAEJLUDpd1HRwOnAxqfQG_p1Ej7N77ILrpk',
		// The timezone setting, Guzzle suggests having this for proper requests/responses
		'timezone' => 'Europe/Rome',
		// If no response is found, this will be used as response
		'default_fallback_response' => 'Sorry, could you repeat that?',
		// Greeting string
		'greeting' => "I'm a movie recommender system.\n" .
				"I'm able to suggest you movies 🎬 according to your preferences 😉\n" .
				"I need at least 3 preferences for generating recommendations 😉",
		// Facebook payload returned from "Start" button
		'getStartedPayload' => "get_started",
        // Base URI (Altieri)
        'base_uri' => '193.204.187.192:8093', //MODIFICABILE
		// Server application URI (Altieri)
		'application_uri' => '/bookrecsysservice', //MODIFICABILE
		// Default photo to send if the provided one is not valid
		'default_photo' => 'https://bytebucket.org/lu_na/movierecsystelegram/raw/722f6bf618a3d9342c678c878ee60a593d08721b/recsysbot/images/default.jpg?token=8b07161012a8adb6134efa50aa5c98a2b0bd4ba0'
];
?>
