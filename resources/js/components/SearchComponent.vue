<template>
    <div class="container">

                    <button class="btn btn-outline-dark btn-lesson" @click="createMusicianObjects(), activeBtn = 'btn1'" :class="{active: activeBtn === 'btn1' }">Show All</button>
                    <button class="btn btn-outline-dark btn-lesson" @click="createVocalistObjects(), activeBtn = 'btn2'" :class="{active: activeBtn === 'btn2' }">Vocals</button>
                    <button class="btn btn-outline-dark btn-lesson" @click="createGuitaristObjects(), activeBtn = 'btn3'" :class="{active: activeBtn === 'btn3' }">Guitar</button>
                    <button class="btn btn-outline-dark btn-lesson" @click="createBassistObjects(), activeBtn = 'btn4'" :class="{active: activeBtn === 'btn4' }">Bass</button>
                    <button class="btn btn-outline-dark btn-lesson" @click="createDrummerObjects(), activeBtn = 'btn5'" :class="{active: activeBtn === 'btn5' }">Drums</button>
                    <button class="btn btn-outline-dark btn-lesson" @click="createKeyboardistObjects(), activeBtn = 'btn6'" :class="{active: activeBtn === 'btn6' }">Keys</button>
                    <br>
                    <br>
                    <h1 class="link">{{ filter }}</h1>
                    <br>
                    
                    <!-- LOOP THROUGH ALL PROFILE OBJECTS -->
                        <div v-for="(profileObject) in profileObjects" :key="profileObject.id">
                            <!-- LOOP THROUGH MUSICIANS FROM CREATED OBJECT ONLY CONTAINING PROFILES MATCHING SPECIFIED VALUES -->
                        <div v-for="musicianObject in musicianObjects" :key="musicianObject.id">
                            <!-- ONLY DISPLAY PROFILES MATCHING SPECIFIED VALUE -->
                            <div v-if="musicianObject.profile_id == profileObject.id">
                            <!-- <div :class="rowColor(index)"> -->
                                <div class="row shadedSearch">
                                <div class="col-sm-2"><a class="link" :href='"/profiles/" + profileObject.id'>{{ profileObject.nickname }}</a></div> 
                                <div class="col left">
                                <a :href='"/profiles/" + profileObject.id'><img class="searchImg" :src='"/files/" + profileObject.photo'/></a>
                                </div>
                                <div class="col">
                                <div v-for="talentObject in talentObjects" :key="talentObject.id">
                                    <div v-if="talentObject.profile_id == profileObject.id">
                                        <div v-for="instrumentObject in instrumentObjects" :key="instrumentObject.id">
                                            <div v-if="talentObject.instrument_id == instrumentObject.id">
                                        <div>{{ instrumentObject.type }}</div></div></div></div></div>
                                        </div>
                                <div class="col">{{ profileObject.age }}</div>
                                <div class="col">{{ profileObject.city }}</div>
                                <div class="col">{{ profileObject.genre }}</div>
                                <div class="col"><a :href='"/profiles/" + profileObject.id' class="btn btn-purple btn-sm">View Profile</a></div>
                                
                                </div>
                                <pre class="row"> </pre>
                            </div>
                        </div> 
                    </div>
        </div>

</template>

<script>

    export default {
        props: {
            profileid:{
                type: Number
            },
        },
        data() {
            return {
                profileObjects: [],
                profiles: [],
                musicianObjects: [],
                musicians: [],
                filter: "",
                talents: [],
                talentObjects: [],
                instrumentObjects: [],
                userObjects: [],
                activeBtn: 'btn1'
        }
    },
    methods: {
        // CREATE PROFILE OBJECTS
        allProfiles() {
            axios.get('/allProfiles')
                .then(response => {
                    console.log("ALLPROFILES");
                    this.profileObjects = response.data;
                    // for (let i in this.profiles) {
                    //         this.profileObjects.push(this.profiles[i]);
                    //             }
                })
                .catch(function(error) {
                    console.log(error);
                });
        },

        // CREATE TALENT OBJECTS
        createTalentObjects() {
            this.talentObjects = [];
            axios.get('/getTalents')
                    .then(response => {
                        this.talentObjects = response.data;
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
        },

        // CREATE INSTRUMENT OBJECTS
        createInstrumentObjects() {
            this.instrumentObjects = [];
            axios.get('/getInstruments')
                    .then(response => {
                        this.instrumentObjects = response.data;
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
        },

        // CREATE TALENT OBJECTS, LOOP THROUGH AND SAVE UNIQUE PROFILE IDS AS MUSICIAN OBJECTS 
        createMusicianObjects() {
            this.filter = "All";
            this.musicianObjects = [];
            this.musicians = [];
            this.createTalentObjects();
            axios.get('/uniqueTalents')
                    .then(response => {
                        this.musicianObjects = response.data;
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
        },

        createVocalistObjects() {
            this.filter = "Vocalists";
            this.musicianObjects = [];
            this.musicians = [];
            this.createTalentObjects();
            axios.get('/vocalists')
                    .then(response => {
                        this.musicianObjects = response.data;
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
        },

        createGuitaristObjects() {
            this.filter = "Guitarists";
            this.musicianObjects = [];
            this.musicians = [];
            this.createTalentObjects();
            axios.get('/guitarists')
                    .then(response => {
                        this.musicianObjects = response.data;
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
        },

        createBassistObjects() {
            this.filter = "Bassists";
            this.musicianObjects = [];
            this.musicians = [];
            this.createTalentObjects();
            axios.get('/bassists')
                    .then(response => {
                        this.musicianObjects = response.data;
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
        },

        createDrummerObjects() {
            this.filter = "Drummers";
            this.musicianObjects = [];
            this.musicians = [];
            this.createTalentObjects();
            axios.get('/drummers')
                    .then(response => {
                        this.musicianObjects = response.data;
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
        },

        createKeyboardistObjects() {
            this.filter = "Keyboardists";
            this.musicianObjects = [];
            this.musicians = [];
            this.createTalentObjects();
            axios.get('/keyboardists')
                    .then(response => {
                        this.musicianObjects = response.data;
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
        },

        // rowColor(index) {
        //     if (index % 2 === 0) {
        //         return "row";
        //     } else {
        //         return "row shadedSearch";
        //     }
        // }
    },

    mounted() {

        this.allProfiles();
        this.createMusicianObjects();
        this.createInstrumentObjects();
        
    },

    computed: {
        
        }
    }
</script>
