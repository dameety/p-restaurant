<template>
    <div class="map bo8 bo-rad-10 of-hidden">
        <div class="contact-map size37" id="google_map">

        </div>
    </div>
</template>

<script>
    export default {
        props: {
            latitude: {
                type: String
            },
            longitude: {
                type: String
            }
        },

        data () {
            return {
                map: null
            }
        },

        mounted () {
            this.initMap();
        },

        methods: {
            initMap () {
                if (window.google === undefined) {
                    console.error('google maps library is not loaded!');
                    return;
                }
                const mapElement = document.getElementById('google_map');

                const location = {lat: Number(this.latitude), lng: Number(this.longitude) };

                const options = { zoom: 9, center: location }

                this.map = new google.maps.Map(mapElement, options);
            }
        }
    }
</script>

<style scoped>

    .map {
        height: 400px;
    }

    #google_map {
        width: 100%;
        height: 100%;
        margin: 0 auto;
    }

</style>