<template>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                    <div>Instruments</div>
                    
                        <div v-for="talentObject in talentObjects" :key="talentObject.id">
                            <input readonly class="text" v-model="talentObject.type">
                                <template v-if="talentObject.isPlayed === 1">
                                    <button :id="talentObject.id" type="button" @click='deleteInstrument' class="btn-sm btn-danger">delete</button>
                                </template>
                                <template v-if="talentObject.isPlayed === 0">
                                    <button :id="talentObject.id" type="button" @click='addInstrument' class="btn-sm btn-success">add</button>
                                </template>
                        <br>
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
                instruments: [],
                talents: [],
                talentObjects: []
        }
    },
    methods: {
        displayInstruments() {
            
            axios.all([axios.get('/all'),
            axios.get('/played/' + this.profileid)])
                .then(axios.spread((firstResponse, secondResponse) => {  
                    this.instruments = firstResponse.data;
                    this.talents = secondResponse.data;
                        for (let i in this.instruments) {
                            this.talentObjects.push(this.instruments[i]);
                                }
                        for (let i in this.talentObjects) {
                            for (let j in this.talents) {
                                if (this.talentObjects[i].id == this.talents[j].instrument_id) {
                                    console.log("TOP TalentObjects: " + this.talentObjects[i].id);
                                    console.log("TOP talents: " + this.talents[j].instrument_id);
                                    this.talentObjects[i].isPlayed = 1;
                                }
                            }
                        }
                }))
                .catch(error => console.log(error));
        },

        addInstrument(e) {
            
            axios.get('/add/' + this.profileid + '/' + e.target.id)
                .then(response => {

                this.instruments = [];
                this.talents = [];
                this.talentObjects = [];
                this.displayInstruments();
                 }   
             )
        },

        deleteInstrument() {
            console.log("DELETE");
        }
    },

    mounted() {
        this.displayInstruments();
    },

    computed: {
        
        }
    }
</script>
