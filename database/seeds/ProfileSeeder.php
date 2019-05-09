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
                'desc' => 'First and foremost I am a drummer. After that, I\'m other things... But I didn\'t play drums to make money.',
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
                'desc' => 'When I\'m dead, I want to be remembered as a musician of some worth and substance.',
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
                'desc' => 'I\'m the kind of person who would love to play whenever I felt like, with a band, and it might as well be the Holiday Inn in Nebraska - somewhere where no one knows you, and you\'re in a band situation just playing music.',
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
                'desc' => 'One of my biggest thrills for me still is sitting down with a guitar or a piano and just out of nowhere trying to make a song happen.',
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
                'desc' => 'My role in society, or any artist\'s or poet\'s role, is to try and express what we all feel. Not to tell people how to feel. Not as a preacher, not as a leader, but as a reflection of us all.',
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
                'desc' => 'I exist in a state of almost perpetual hysteria.',
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
                'desc' => 'Music is the only thing keeping the planet together.',
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
                'desc' => 'Anything worth doing good takes a little chaos.',
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
                'desc' => 'Never lose the groove in order to find a note.',
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
                'desc' => 'The bass is just the crayon that I picked out of the box. I\'d probably be writing similar stuff if I played guitar or trumpet. The pictures I want to draw I do with this crayon I chose, which is the bass.',
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
                'desc' => 'We groove off of everything, any sort of live show. The inner dialogue you\'re having with yourself, between you and the music, is for me the search for God.',
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
                'desc' => 'I saw a drummer play once when I was a kid and I thought, that\'s really cool. You know, you\'re moving. You\'re using your arms and fingers. So I tried it and I loved it.',
                'influences' => 'Ray Charles, R&B, Elvin Jones, the Meters',
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
                'desc' => 'The way to do it is to put as much life into the song as I can. You can either get it to breathe or you can\'t. If you pour some music on whatever\'s wrong, it\'ll sure help out.',
                'influences' => 'Bill Monroe and His Blue Grass Boys, blues, country, R&B, Sonny Boy Williamson II, James "Peck" Curtis',
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
                'desc' => 'I what do! Eat drums! Rarrrrgh!',
                'influences' => 'Keith Moon, Mick Fleetwood',
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
                'desc' => 'My friends call me Keith, but you can call me John.',
                'influences' => 'Carlo Little, Cozy Cole, Gene Krupa',
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
                'desc' => 'What a long strange trip it\'s been.',
                'influences' => 'Hank Ballard and the Midnighters, John Coltrane, rock&roll, R&B, Crows, Gene Vincent, Eddie Cochran, Buddy Holly, Bo Diddley, Lightnin’ Hopkins, Frankie Lee Sims, Jimmy McCracklin, Jimmy Reed',
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
                'desc' => 'Music doesn\'t lie. If there is something to be changed in this world, then it can only happen through music.',
                'influences' => 'Elvis Presley, Little Richard, Chuck Berry, Muddy Waters, Elmore James, B.B. King, Eddie Cochran, Bob Wills, Jimmy Reed, Albert King, Howlin\' Wolf, Curtis Mayfield, Bob Dylan',
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
                'desc' => 'When I heard Son House and Robert Johnson, it blew my mind. It was something I\'d been missing my whole life. That music made me discard everything else and just get down to the soul and honesty of the blues.',
                'influences' => 'Son House, Robert Johnson, The Sonics, Son House, Blind Willie Tell, Skip James, The Monks, The Rats, Bob Dylan, The Gories, The Stooges, The Gun Club',
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
                'desc' => '“I found my God in music and the arts, with writers like Hermann Hesse, and musicians like Muddy Waters, Howlin\' Wolf, and Little Walter. In some way, in some form, my God was always there, but now I have learned to talk to him.”',
                'influences' => 'Muddy Waters, Freddie King, B.B. King, Albert King, Buddy Guy, Hubert Sumlin, Robert Johnson',
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
                'desc' => 'I\'ve realized you can use a fork as a spoon if you use it rapidly enough.',
                'influences' => 'Hip Hop, R&B, Jazz, Rock, Blues, and Soul',
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
                'desc' => 'There is a subconscious, emotional level that informs playing, and since I’m the kind of person who carries his baggage around internally, nothing has ever helped me tap into my feelings more.',
                'influences' => 'Jeff Beck, Rory Gallagher, Ted Nugent, Joe Perry, Mick Taylor, Jimmy Page, Jimi Hendrix, Brian May, Billy Gibbons, David Gilmour, Angus Young, Eddie Van Halen, Elliot Easton, Joe Walsh',
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
                'desc' => 'Gonna see some good times
                Gonna get to ring that bell
                Gonna see some good times
                Some times to make up for when I\'m not feeling well',
                'influences' => 'Lee Michaels, Ray Manzarek, Goldy McJohn',
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
                'desc' => 'I\'ve never had a writer\'s block, but still I think: \'Is it going to happen this time?\' You never know what you\'re going to get; you just put your fingers on the keys and hope.',
                'influences' => 'Bach, Mozart, Chopin, Beethoven, classical, gospel',
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
                'desc' => 'Essentially, I’m a composer who plays the piano or I’m a pianist who is a composer. My piano playing is shaped by the material and ideas I’m trying to express. I continue to play jazz, because that’s what I love most to do.',
                'influences' => 'Chopin, Liszt, Mozart, Bach',
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
                'desc' => 'I am, as I\'ve said, merely competent. But in an age of incompetence, that makes me extraordinary.',
                'influences' => 'Beethoven, the Beatles, Dave Brubeck, George Gershwin, Phil Spector, Ray Charles and Fats Domino',
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
                'desc' => 'I want to write standards, not just hits.',
                'influences' => 'Oscar Peterson, Bill Harris, Tal Farlow, Albert Ammons, Pete Johnson, especially Jimmy Yancy',
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
                'desc' => 'Popularity has everything to do with business and nothing to do with music.',
                'influences' => 'Sonny Rollins, Charles Mingus, Miles Davis, Thelonious Monk … And I like big-band arrangers, like Gil Evans. There’s a band called the Sauter-Finegan Orchestra that I used to like for the arrangements.',
                'read_write_music' => '10',
                'improvise' => '9',
                'ear' => '9',
            ]);

            \App\Profile::create([
                'nickname' => 'Liberace',
                'user_id' => 31,
                'photo' => 'images/xFk7urr7NQR8Pr5QSrpwScw96mOGrFyMKQEii5ZJ.jpeg',
                'genre' => 'pop, classical',
                'city' => 'Lexington, KY',
                'age' => '34',
                'desc' => 'My whole trick is to keep the tune well out in front. If I play Tchaikovsky, I play his melodies and skip his spiritual struggle.',
                'influences' => 'Ignacy Paderewski, classical, ragtime, pop',
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
                'desc' => 'Well I won\'t back down
                No I won\'t back down
                You can stand me up at the gates of hell
                But I won\'t back down',
                'influences' => 'AM radio. It was a great time for music, and I’m lucky to be born when I was born.',
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
                'desc' => 'One pill makes you larger, and one pill makes you small
                And the ones that mother gives you, don\'t do anything at all
                Go ask Alice, when she\'s ten feet tall',
                'influences' => 'Alice in Wonderland, acid',
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
                'desc' => 'I wear black because I\'m comfortable in it. But then in the summertime when it\'s hot I\'m comfortable in light blue.',
                'influences' => 'In my little world, in northeast Arkansas on a cotton farm, it was my brother, Jack. He was my inspiration.',
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
                'desc' => 'When a lot of women listen to music, they want to feel the power of a real man.',
                'influences' => 'The Moonglows, The Capris, Rudy West of The Five Keys, Clyde McPhatter, Ray Charles, Little Willie John, Frank Sinatra, Billy Eckstine, Nat King Cole',
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
                'desc' => 'I\'m the most misunderstood, misquoted person I know, honestly.',
                'influences' => 'black singers from the early 1960s. I like everybody at Motown and most of the Stax artists. I really want to be Mavis Staples.',
                'read_write_music' => '8',
                'improvise' => '8',
                'ear' => '9',
            ]);

            \App\Profile::create([
                'nickname' => 'Lady Day',
                'user_id' => 37,
                'photo' => 'images/mCLg4zp9gN0g3rU1p8tK5CgvA71OS0QSF8ofpmNU.jpeg',
                'genre' => 'jazz/swing',
                'city' => 'Lexington, KY',
                'age' => '26',
                'desc' => 'If I\'m going to sing like someone else, then I don\'t need to sing at all.',
                'influences' => 'Louis Armstrong, Bessie Smith',
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
                'desc' => 'In the end, I don\'t think you can find soul. Soul finds you.',
                'influences' => 'Ray Charles and Lonnie Donegan',
                'read_write_music' => '6',
                'improvise' => '7',
                'ear' => '8',
            ]);

            \App\Profile::create([
                'nickname' => 'James B',
                'user_id' => 39,
                'photo' => 'images/W9OYt58h2oIleeVTWD7ZTWpC3qk52cLaZkwVCxSB.jpeg',
                'genre' => 'funk, soul, r&b',
                'city' => 'Lexington, KY',
                'age' => '33',
                'desc' => 'Hair is the first thing. And teeth the second. Hair and teeth. A man got those two things he\'s got it all.',
                'influences' => 'classic blues, gospel, and African-American folk music, Louis Jordan',
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
                'desc' => 'Showtime, Synergy!',
                'influences' => 'The Archies, The Monkees',
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
                'desc' => 'I\'m not a singer who plays a bit of drums. I\'m a drummer that sings a bit.',
                'influences' => 'Ringo Starr, Buddy Rich, the Action, Motown and Stax records',
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
                'desc' => 'Music\'s been around a long time, and there\'s going to be music long after Ray Charles is dead. I just want to make my mark, leave something musically good behind. If it\'s a big record, that\'s the frosting on the cake, but music\'s the main meal.',
                'influences' => 'Nat King Cole, Louis Jordan, Charles Brown',
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
