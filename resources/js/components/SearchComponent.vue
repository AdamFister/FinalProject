<template>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                    {{ filter }}
                    <br>
                    <br>
                    <button @click="displayMusicians">Show All</button>
                    <button @click="displayBassists">Bassists</button>
                    <br>
                    <br>
                        <div v-for="profileObject in profileObjects" :key="profileObject.id">
                        <div v-for="musicianObject in musicianObjects" :key="musicianObject.id">
                            <template v-if="musicianObject.profile_id == profileObject.id">
                            <p>{{ profileObject.nickname }} <br><a :href='"/profiles/" + profileObject.id' class="btn btn-success btn-sm">View Profile</a></p>
                            </template>
                        </div>
                            <!-- <input readonly class="text" v-model="musicianObject.nickname"> -->
                                <!-- <template v-if="talentObject.isPlayed === 1"> 
                                     <button :id="talentObject.id" type="button" @click='deleteInstrument' class="btn-sm btn-danger">delete</button> 
                                 </template> 
                                 <template v-if="talentObject.isPlayed === 0"> 
                                     <button :id="talentObject.id" type="button" @click='addInstrument' class="btn-sm btn-success">add</button> 
                                 </template> -->
                        
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
                filter: ""
        }
    },
    methods: {
        getProfiles() {
            axios.get('/getProfiles')
                    .then(response => {
                        console.log("ALLPROFILES");
                        this.profiles = response.data;
                        for (let i in this.profiles) {
                                this.profileObjects.push(this.profiles[i]);
                                    }
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
        },

        displayMusicians() {
            this.filter = "Showing All";
            this.musicianObjects = [];
            this.musicians = [];
            axios.get('/allProfiles')
                    .then(response => {
                        console.log("ALL");
                        this.musicians = response.data;
                        for (let i in this.musicians) {
                                this.musicianObjects.push(this.musicians[i]);
                                    }
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
        },

        displayBassists() {
            this.filter = "Showing Bassists";
            this.musicianObjects = [];
            this.musicians = [];
            axios.get('/bassists')
                    .then(response => {
                        console.log("BASS");
                        this.musicians = response.data;
                        for (let i in this.musicians) {
                                this.musicianObjects.push(this.musicians[i]);
                                    }
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
        }
    },

    mounted() {

        this.getProfiles();
        this.displayMusicians();
        
    },

    computed: {
        
        }
    }
</script>
