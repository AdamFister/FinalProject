<?php

use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { {
            \App\Profile::create([
                'nickname' => 'Admin',
                'user_id' => 1
            ]);

            \App\Profile::create([
                'nickname' => 'Ringo S',
                'user_id' => 2,
                'photo' => 'images/4yVsZTaeEtm3rIMw02mTfjG1W9GGUbR2kPyF1Yzv.jpeg',
                'genre' => 'rock',
                'city' => 'Lexington, KY',
                'age' => '28',
                'desc' => 'And I said:
                No no no no, I don\'t smoke it no more
                I\'m tired of waking up on the floor
                No, thank you, please,
                It only makes me sneeze
                And then it makes it hard to find the door',
                'influences' => 'Elvis, Bob Dylan, Gene Autry, Lee Dorsey, country, jazz',
                'read_write_music' => '6',
                'improvise' => '7',
                'ear' => '8',
            ]);

            \App\Profile::create([
                'nickname' => 'Freddie M',
                'user_id' => 3,
                'photo' => 'images/StaOXXQ6MBzydMBcr4GOqvmyhrLTGxQZxgMjov6r.jpeg',
                'genre' => 'rock',
                'city' => 'Lexington, KY',
                'age' => '35',
                'desc' => 'Open up your mind and let me step inside
                Rest your weary head and let your heart decide
                It\'s so easy when you know the rules
                It\'s so easy all you have to do
                Is fall in love
                Play the game
                Everybody play the game of love',
                'influences' => 'Cream, Jimi Hendrix, blues-based rock',
                'read_write_music' => '9',
                'improvise' => '7',
                'ear' => '9',
            ]);

            \App\Profile::create([
                'nickname' => 'George H',
                'user_id' => 4,
                'photo' => 'images/1mlHO8DxsXDoFTfQgc7E4eYUVJwEB41pUJGwMVo1.jpeg',
                'genre' => 'rock',
                'city' => 'Lexington, KY',
                'age' => '25',
                'desc' => 'Sunrise doesn\'t last all morning
                A cloudburst doesn\'t last all day 
                Seems my love is up 
                And has left you with no warning 
                But it\'s not always going 
                To be this grey
                All things must pass
                All things must pass away',
                'influences' => 'Buddy Holly, Carl Perkins, Elvis, Ravi Shankar, R&B, rock, rockabilly',
                'read_write_music' => '6',
                'improvise' => '7',
                'ear' => '8',
            ]);

            \App\Profile::create([
                'nickname' => 'Paul M',
                'user_id' => 5,
                'photo' => 'images/WxnmKs99nz0LQPsKFlTyq2ywcPpmmbDAn6gKlCdL.jpeg',
                'genre' => 'rock',
                'city' => 'Lexington, KY',
                'age' => '26',
                'desc' => 'Someone\'s knockin\' at the door
                Somebody\'s ringin\' the bell
                Someone\'s knockin\' at the door
                Somebody\'s ringin\' the bell
                Do me a favor
                Open the door and let \'em in',
                'influences' => 'Chuck Berry, Eddie Cochran, Little Richard, Gene Vincent, Sam Cooke',
                'read_write_music' => '6',
                'improvise' => '7',
                'ear' => '8',
            ]);

            \App\Profile::create([
                'nickname' => 'John L',
                'user_id' => 6,
                'photo' => 'images/3P8GMIqpxYpOI6WqF86o2FhztyOpQr7SO0OveAjC.jpeg',
                'genre' => 'rock',
                'city' => 'Lexington, KY',
                'age' => '28',
                'desc' => 'Ev\'rybody\'s talking about
                Bagism, Shagism, Dragism, Madism, Ragism, Tagism
                This-ism, that-ism, is-m, is-m, is-m
                All we are saying is give peace a chance
                All we are saying is give peace a chance',
                'influences' => 'The Shadows, Jerry Lee Lewis, the Shirelles, Elvis, Smokey Robinson, Bob Dylan',
                'read_write_music' => '6',
                'improvise' => '7',
                'ear' => '8',
            ]);

            \App\Profile::create([
                'nickname' => 'Adam F',
                'user_id' => 7,
                'photo' => 'images/lCmF0IyGHF3PqlVRVdLZxEboej3PTadWi9wamZrs.jpeg',
                'genre' => 'rock',
                'city' => 'Lexington, KY',
                'age' => '37',
                'desc' => 'Hiya folks! I\'m a multi-instrumentalist who loves to jam with friends. I love writing and arranging music, especially viola parts for my wife Chelsea and I to play together! Come jam with us!',
                'influences' => 'The Beatles, Phish, Talking Heads, Steely Dan, Tom Petty, The Band, Grateful Dead, Bela Fleck and the Flecktones, Dave Brubeck Quartet, Elton John, Hall & Oates, Beach Boys, B-52\'s, Simon & Garfunkel, Queen, Jimi Hendrix, Johnny Cash, Buddy Holly',
                'read_write_music' => '6',
                'improvise' => '7',
                'ear' => '8',
            ]);

            \App\Profile::create([
                'nickname' => 'Sting',
                'user_id' => 8,
                'photo' => 'images/iQGjcvdTFe3ti4qe21SYMrUN2NTHHDrCVV8Cnt1E.jpeg',
                'genre' => 'rock, world music',
                'city' => 'Lexington, KY',
                'age' => '33',
                'desc' => 'Mephistopheles is not your name
                I know what you\'re up to just the same
                I will listen hard to your tuition
                You will see it come to its fruition
                I\'ll be wrapped around your finger
                I\'ll be wrapped around your finger',
                'influences' => 'Steve Winwood, Peter Gabriel, Joni Mitchell, Paul Simon, Steely Dan',
                'read_write_music' => '7',
                'improvise' => '7',
                'ear' => '8',
            ]);

            \App\Profile::create([
                'nickname' => 'Jaco P',
                'user_id' => 9,
                'photo' => 'images/XWzbpISGzsXGtME46VZxT0q5hnAUwJEFoxd7Nt6I.jpeg',
                'genre' => 'jazz fusion',
                'city' => 'Lexington, KY',
                'age' => '24',
                'desc' => 'Come on, come over
                The pleasure is all mine
                Music\'s playin\', the door just opened
                You don\'t have to stand in line
                People of the world
                Have been uptight far too long
                While you\'re busy making stands
                Everybody\'s making plans
                To move on, move right along',
                'influences' => 'Charlie Parker, John Coltrane, Cannonball Adderley, Max Roach, Paul Bley',
                'read_write_music' => '9',
                'improvise' => '10',
                'ear' => '10',
            ]);

            \App\Profile::create([
                'nickname' => 'Flea',
                'user_id' => 10,
                'photo' => 'images/ltSlJy2ghNvEAAyn0DrOZzesMf1XPCZzvZiAzA1w.jpeg',
                'genre' => 'hard rock',
                'city' => 'Lexington, KY',
                'age' => '26',
                'desc' => 'Flea!
                Flea!
                Flea fly!
                Flea fly!
                Flea fly flo!
                Flea fly flo!
                Beestay!
                Beestay!
                A koomalada koomalada koomalada beestay!
                A koomalada koomalada koomalada beestay!
                Oh no no no not the beestay!
                Oh no no no not the beestay!',
                'influences' => 'Jaco Pastorius, Miles Davis, Duke Ellington, Charlie Parker, Louis Armstrong, John Coltrane, Dizzy Gillespie, Black Flag, David Bowie, Defunkt, Neil Young',
                'read_write_music' => '8',
                'improvise' => '9',
                'ear' => '8',
            ]);

            \App\Profile::create([
                'nickname' => 'Victor W',
                'user_id' => 11,
                'photo' => 'images/lxAWoijw7R3kOyLx39LKoRwEnpvlYBAPBAHALgK6.png',
                'genre' => 'jazz fusion',
                'city' => 'Lexington, KY',
                'age' => '33',
                'desc' => 'My name is Victa, and I\'m a winner and I know what I\'m talkin\'
                About
                And just \'cause I come out on top don\'t mean I\'m leaving U out
                I\'m a trickster but not a sinner and U may not agree
                Before U start to criticize, are U talkin\' \'bout U or me?',
                'influences' => 'James Brown, Super Fly-era Curtis Mayfield, Stanley Clarke, Sly & the Family Stone "Thank You", Jaco Pastorius with Weather Report and as a solo artist',
                'read_write_music' => '9',
                'improvise' => '10',
                'ear' => '9',
            ]);

            \App\Profile::create([
                'nickname' => 'Les C',
                'user_id' => 12,
                'photo' => 'images/M14Rsg3P6M3OT5CwMtUbNmP6pl8L2l6KsMmAn1WJ.jpeg',
                'genre' => 'funk metal',
                'city' => 'Lexington, KY',
                'age' => '29',
                'desc' => 'My name is Mud.',
                'influences' => 'Larry Graham, Chris Squire, Tony Levin, Roger Waters, Geddy Lee, Paul McCartney, Geezer Butler, Bootsy Collins, Stanley Clarke, John Paul Jones, and the Residents',
                'read_write_music' => '9',
                'improvise' => '8',
                'ear' => '8',
            ]);

            \App\Profile::create([
                'nickname' => 'Tina W',
                'user_id' => 13,
                'photo' => 'images/h7qfTq3US27aeFNyElKVND09MeH0vcn1fI9D9oRM.jpeg',
                'genre' => 'new wave/art rock',
                'city' => 'Lexington, KY',
                'age' => '27',
                'desc' => 'What you gonna do when you get out of jail?
                I\'m gonna have some fun
                What do you consider fun?
                Fun, natural fun',
                'influences' => 'Donald “Duck” Dunn, James Jamerson',
                'read_write_music' => '8',
                'improvise' => '8',
                'ear' => '8',
            ]);

            \App\Profile::create([
                'nickname' => 'Mickey H',
                'user_id' => 14,
                'photo' => 'images/MT2WrRql3mSDNMU8y5mOxw59LyCukIFz3TvjHShc.jpeg',
                'genre' => 'rock',
                'city' => 'Lexington, KY',
                'age' => '25',
                'desc' => 'Life is about rhythm. We vibrate, our hearts are pumping blood, we are a rhythm machine, that\'s what we are.',
                'influences' => 'Gene Krupa, Buddy Rich, Olatunji, Airto Moreira, Tito Puente, Machito, the black Diaspora - Aruba, West Africa, Haiti, Puerto Rico, Cuba',
                'read_write_music' => '8',
                'improvise' => '10',
                'ear' => '9',
            ]);

            \App\Profile::create([
                'nickname' => 'Bill K',
                'user_id' => 15,
                'photo' => 'images/99Hchm464i9aia1W0ySvSmvmrxeePm1jtTf2K97H.jpeg',
                'genre' => 'rock',
                'city' => 'Lexington, KY',
                'age' => '29',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '8',
                'improvise' => '10',
                'ear' => '8',
            ]);

            \App\Profile::create([
                'nickname' => 'Levon H',
                'user_id' => 16,
                'photo' => 'images/NCUzOQ9fzjro7xgZ8CzhhT58hv2kRc4MWswNxs8l.jpeg',
                'genre' => 'roots rock, americana',
                'city' => 'Lexington, KY',
                'age' => '31',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '8',
                'improvise' => '8',
                'ear' => '9',
            ]);

            \App\Profile::create([
                'nickname' => 'Animal',
                'user_id' => 17,
                'photo' => 'images/lIp0opq7iE5vMkvNN6tZpiYtA17ChSIDNZxFEqB5.jpeg',
                'genre' => 'rock',
                'city' => 'Lexington, KY',
                'age' => '25',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '6',
                'improvise' => '7',
                'ear' => '8',
            ]);

            \App\Profile::create([
                'nickname' => 'Keith M',
                'user_id' => 18,
                'photo' => 'images/aVlL2gQq6lWWAUNcNsH7jNh317kijqQ87cqdf5Xj.jpeg',
                'genre' => 'rock',
                'city' => 'Lexington, KY',
                'age' => '30',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '6',
                'improvise' => '7',
                'ear' => '8',
            ]);

            \App\Profile::create([
                'nickname' => 'Jerry G',
                'user_id' => 19,
                'photo' => 'images/K8RQC4KgzX7py2fOXUzfh8qvJxorCZwp8YSXN1N2.jpeg',
                'genre' => 'rock',
                'city' => 'Lexington, KY',
                'age' => '31',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '8',
                'improvise' => '10',
                'ear' => '8',
            ]);

            \App\Profile::create([
                'nickname' => 'Jimi H',
                'user_id' => 20,
                'photo' => 'images/IAiamFjYG2UlNXB0leEwbFlvJ43iBgMQOXzkKv8Y.jpeg',
                'genre' => 'rock/blues',
                'city' => 'Lexington, KY',
                'age' => '25',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '6',
                'improvise' => '10',
                'ear' => '9',
            ]);

            \App\Profile::create([
                'nickname' => 'Jack W',
                'user_id' => 21,
                'photo' => 'images/dpdgxeHsNaCOXAlmRNE9NBA3qln6cu8XRahObIbE.png',
                'genre' => 'rock, blues, folk, punk',
                'city' => 'Lexington, KY',
                'age' => '29',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '8',
                'improvise' => '9',
                'ear' => '8',
            ]);

            \App\Profile::create([
                'nickname' => 'Eric C',
                'user_id' => 22,
                'photo' => 'images/9l7BSwuVD94kTwVlkS7KaEfTJBeUVX4ceoK84qV0.jpeg',
                'genre' => 'rock/blues',
                'city' => 'Lexington, KY',
                'age' => '27',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '8',
                'improvise' => '10',
                'ear' => '9',
            ]);

            \App\Profile::create([
                'nickname' => 'John M',
                'user_id' => 23,
                'photo' => 'images/3M1Y5ExTjigW5XJDJcMhFavPP7zc7ozdDswpQZmv.jpeg',
                'genre' => 'rock/blues',
                'city' => 'Lexington, KY',
                'age' => '31',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '8',
                'improvise' => '9',
                'ear' => '8',
            ]);

            \App\Profile::create([
                'nickname' => 'Slash',
                'user_id' => 24,
                'photo' => 'images/Fs0ezQyCbiBTQqDoRsYrMsmfI6WSRuvh0XOIhEa3.jpeg',
                'genre' => 'hard rock/blues',
                'city' => 'Lexington, KY',
                'age' => '28',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '8',
                'improvise' => '9',
                'ear' => '8',
            ]);

            \App\Profile::create([
                'nickname' => 'Brent M',
                'user_id' => 25,
                'photo' => 'images/t0sMyUW58gH8PSk7uM7QQR6eQ8Tuhidh4nkObeXx.jpeg',
                'genre' => 'rock',
                'city' => 'Lexington, KY',
                'age' => '26',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '8',
                'improvise' => '10',
                'ear' => '9',
            ]);

            \App\Profile::create([
                'nickname' => 'Elton J',
                'user_id' => 26,
                'photo' => 'images/3Y7oANbxX0EUPRqViy9rnTIboqhe3JjmYQLWQ6kQ.jpeg',
                'genre' => 'rock/glam rock',
                'city' => 'Lexington, KY',
                'age' => '29',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '9',
                'improvise' => '8',
                'ear' => '9',
            ]);

            \App\Profile::create([
                'nickname' => 'Dave B',
                'user_id' => 27,
                'photo' => 'images/gHkhJgVtPrNhs5oFn2wDIW6j4qqou87V1MdE0LH6.jpeg',
                'genre' => 'jazz',
                'city' => 'Lexington, KY',
                'age' => '33',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '10',
                'improvise' => '10',
                'ear' => '10',
            ]);

            \App\Profile::create([
                'nickname' => 'Billy J',
                'user_id' => 28,
                'photo' => 'images/GHSLaCvAqOBK8A1QJMoV3srWhu874EAnBWlFJHV2.jpeg',
                'genre' => 'rock',
                'city' => 'Lexington, KY',
                'age' => '29',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '9',
                'improvise' => '8',
                'ear' => '8',
            ]);

            \App\Profile::create([
                'nickname' => 'Vince G',
                'user_id' => 29,
                'photo' => 'images/FRXaogIfgr3vvkg8YK5NStBan6pg8waMkMGmtot1.jpeg',
                'genre' => 'jazz',
                'city' => 'Lexington, KY',
                'age' => '32',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '9',
                'improvise' => '9',
                'ear' => '9',
            ]);

            \App\Profile::create([
                'nickname' => 'Donald F',
                'user_id' => 30,
                'photo' => 'images/mDvVMJj79MLC97AVjViQZZ8PoMjMXiamkyMkg01Q.jpeg',
                'genre' => 'jazz fusion',
                'city' => 'Lexington, KY',
                'age' => '31',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '10',
                'improvise' => '9',
                'ear' => '9',
            ]);

            \App\Profile::create([
                'nickname' => 'Liberace',
                'user_id' => 31,
                'photo' => 'images/xFk7urr7NQR8Pr5QSrpwScw96mOGrFyMKQEii5ZJ.jpeg',
                'genre' => 'big band',
                'city' => 'Lexington, KY',
                'age' => '34',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '9',
                'improvise' => '8',
                'ear' => '8',
            ]);

            \App\Profile::create([
                'nickname' => 'Tom P',
                'user_id' => 32,
                'photo' => 'images/cYMMG5dm5f5WZ2hByqyQSJTwBJ7PbkUHYqqVyXiR.jpeg',
                'genre' => 'rock',
                'city' => 'Lexington, KY',
                'age' => '29',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '9',
                'improvise' => '8',
                'ear' => '9',
            ]);

            \App\Profile::create([
                'nickname' => 'Grace S',
                'user_id' => 33,
                'photo' => 'images/zTFukZdg5s2vosIJbcASOxHyX80jnZZ5RIcnuikD.jpeg',
                'genre' => 'rock',
                'city' => 'Lexington, KY',
                'age' => '27',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '7',
                'improvise' => '7',
                'ear' => '8',
            ]);

            \App\Profile::create([
                'nickname' => 'Johnny C',
                'user_id' => 34,
                'photo' => 'images/ehOEg9W4oEUc8z0FrGmLvz4rFAzU079k71jBcTcu.jpeg',
                'genre' => 'country, gospel, rockabilly',
                'city' => 'Lexington, KY',
                'age' => '31',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '7',
                'improvise' => '7',
                'ear' => '9',
            ]);

            \App\Profile::create([
                'nickname' => 'Marvin G',
                'user_id' => 35,
                'photo' => 'images/Spl0KVUCBDdmoV6AqEuQzU6A8ROrr5Y8A5BOFVjy.jpeg',
                'genre' => 'soul/r&b',
                'city' => 'Lexington, KY',
                'age' => '33',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '8',
                'improvise' => '9',
                'ear' => '9',
            ]);

            \App\Profile::create([
                'nickname' => 'Dusty S',
                'user_id' => 36,
                'photo' => 'images/D4gubW4q1aZyr9wXXyM4qxbsY0ePU6SpzDStc9bw.jpeg',
                'genre' => 'blue-eyed soul/pop',
                'city' => 'Lexington, KY',
                'age' => '27',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '8',
                'improvise' => '8',
                'ear' => '9',
            ]);

            \App\Profile::create([
                'nickname' => 'Billie H',
                'user_id' => 37,
                'photo' => 'images/mCLg4zp9gN0g3rU1p8tK5CgvA71OS0QSF8ofpmNU.jpeg',
                'genre' => 'jazz/swing',
                'city' => 'Lexington, KY',
                'age' => '26',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '8',
                'improvise' => '8',
                'ear' => '9',
            ]);

            \App\Profile::create([
                'nickname' => 'Joe C',
                'user_id' => 38,
                'photo' => 'images/oKLY3qtC1rf8jE0QXZTOkSptTkTwyHuoAtfHzS4a.png',
                'genre' => 'rock, blues, soul',
                'city' => 'Lexington, KY',
                'age' => '31',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '6',
                'improvise' => '7',
                'ear' => '8',
            ]);

            \App\Profile::create([
                'nickname' => 'James B',
                'user_id' => 39,
                'photo' => 'images/W9OYt58h2oIleeVTWD7ZTWpC3qk52cLaZkwVCxSB.jpeg',
                'genre' => 'funk/soul/r&b',
                'city' => 'Lexington, KY',
                'age' => '33',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '7',
                'improvise' => '9',
                'ear' => '9',
            ]);

            \App\Profile::create([
                'nickname' => 'Jem',
                'user_id' => 40,
                'photo' => 'images/d3lESAmOu2lGzqrOxThkjrpcZyuITzIVasQ79Xuw.jpeg',
                'genre' => 'new wave',
                'city' => 'Lexington, KY',
                'age' => '22',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '9',
                'improvise' => '8',
                'ear' => '10',
            ]);

            \App\Profile::create([
                'nickname' => 'Phil C',
                'user_id' => 41,
                'photo' => 'images/gPcHZ9fLIQE3D5PVSn3Z3wYWYetMZrrT4g7LCVhF.jpeg',
                'genre' => 'rock',
                'city' => 'Lexington, KY',
                'age' => '31',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '9',
                'improvise' => '8',
                'ear' => '9',
            ]);

            \App\Profile::create([
                'nickname' => 'Ray C',
                'user_id' => 42,
                'photo' => 'images/EmLJYFFvZzFpaFTNnW3oTmEPx6Wa6DJcsdhM53ZE.jpeg',
                'genre' => 'soul, blues, gospel, country, r&b',
                'city' => 'Lexington, KY',
                'age' => '33',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'influences' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'read_write_music' => '9',
                'improvise' => '9',
                'ear' => '8',
            ]);

            \App\Profile::create([
                'nickname' => 'Chelsea',
                'user_id' => 43,
                'photo' => 'images/axqrut4TCOW9ZVMPm6D5c0JMHxj1CXlaAI8QjQIf.jpeg',
                'genre' => 'pop, classical, classic rock covers, weddings, special events',
                'city' => 'Lexington',
                'age' => '32',
                'desc' => 'I like to play viola! Hit me up for all your viola needs.',
                'influences' => 'Lindsey Stirling, Amanda Shires',
                'read_write_music' => '8',
                'improvise' => '5',
                'ear' => '7',
            ]);
        }
    }
}
