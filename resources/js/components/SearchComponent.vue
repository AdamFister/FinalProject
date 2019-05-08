<template>
    <div class="container">

                    <button class="btn btn-outline-dark btn-lesson" @click="displayMusicians(), activeBtn = 'btn1'" :class="{active: activeBtn === 'btn1' }">Show All</button>
                    <button class="btn btn-outline-dark btn-lesson" @click="displayVocalists(), activeBtn = 'btn2'" :class="{active: activeBtn === 'btn2' }">Vocals</button>
                    <button class="btn btn-outline-dark btn-lesson" @click="displayGuitarists(), activeBtn = 'btn3'" :class="{active: activeBtn === 'btn3' }">Guitar</button>
                    <button class="btn btn-outline-dark btn-lesson" @click="displayBassists(), activeBtn = 'btn4'" :class="{active: activeBtn === 'btn4' }">Bass</button>
                    <button class="btn btn-outline-dark btn-lesson" @click="displayDrummers(), activeBtn = 'btn5'" :class="{active: activeBtn === 'btn5' }">Drums</button>
                    <button class="btn btn-outline-dark btn-lesson" @click="displayKeyboardists(), activeBtn = 'btn6'" :class="{active: activeBtn === 'btn6' }">Keys</button>
                    <br>
                    <br>
                    <h1 class="link">{{ filter }}</h1>
                    <br>
                    
                    <!-- LOOP THROUGH ALL PROFILES -->
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
                                <div v-for="talentTableObject in talentObjects" :key="talentTableObject.id">
                                    <div v-if="talentTableObject.profile_id == profileObject.id">
                                        <div v-for="instrumentObject in instrumentObjects" :key="instrumentObject.id">
                                            <div v-if="talentTableObject.instrument_id == instrumentObject.id">
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

        displaySearchInstruments() {
            this.talentObjects = [];
            axios.get('/getTalents')
                    .then(response => {
                        this.talentObjects = response.data;
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
        },

        getInstrumentObjects() {
            this.instrumentObjects = [];
            axios.get('/getInstruments')
                    .then(response => {
                        this.instrumentObjects = response.data;
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
        },

        displayMusicians() {
            this.filter = "All";
            this.musicianObjects = [];
            this.musicians = [];
            this.displaySearchInstruments();
            axios.get('/uniqueTalents')
                    .then(response => {
                        this.musicianObjects = response.data;
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
        },

        displayVocalists() {
            this.filter = "Vocalists";
            this.musicianObjects = [];
            this.musicians = [];
            this.displaySearchInstruments();
            axios.get('/vocalists')
                    .then(response => {
                        this.musicianObjects = response.data;
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
        },

        displayGuitarists() {
            this.filter = "Guitarists";
            this.musicianObjects = [];
            this.musicians = [];
            this.displaySearchInstruments();
            axios.get('/guitarists')
                    .then(response => {
                        this.musicianObjects = response.data;
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
        },

        displayBassists() {
            this.filter = "Bassists";
            this.musicianObjects = [];
            this.musicians = [];
            this.displaySearchInstruments();
            axios.get('/bassists')
                    .then(response => {
                        this.musicianObjects = response.data;
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
        },

        displayDrummers() {
            this.filter = "Drummers";
            this.musicianObjects = [];
            this.musicians = [];
            this.displaySearchInstruments();
            axios.get('/drummers')
                    .then(response => {
                        this.musicianObjects = response.data;
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
        },

        displayKeyboardists() {
            this.filter = "Keyboardists";
            this.musicianObjects = [];
            this.musicians = [];
            this.displaySearchInstruments();
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
        this.displayMusicians();
        this.getInstrumentObjects();
        
    },

    computed: {
        
        }
    }
</script>
