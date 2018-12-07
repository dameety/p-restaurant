<template>
    <div>
        <form @submit.prevent="store()" :class="[layout]">
            <div class="row">
                <div class="col-md-4">
                    <!-- Date -->
                    <span class="txt9">
                        Date
                    </span>

                    <div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                        <input v-model="newReservation.date" class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text" name="date">
                        <i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- Time -->
                    <span class="txt9">
                        Time
                    </span>

                    <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
                        <!-- Select2 -->
                        <select v-model="newReservation.time" class="selection-1" name="time">
                            <option>9:00</option>
                            <option>9:30</option>
                            <option>10:00</option>
                            <option>10:30</option>
                            <option>11:00</option>
                            <option>11:30</option>
                            <option>12:00</option>
                            <option>12:30</option>
                            <option>13:00</option>
                            <option>13:30</option>
                            <option>14:00</option>
                            <option>14:30</option>
                            <option>15:00</option>
                            <option>15:30</option>
                            <option>16:00</option>
                            <option>16:30</option>
                            <option>17:00</option>
                            <option>17:30</option>
                            <option>18:00</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- People -->
                    <span class="txt9">
                        People
                    </span>

                    <div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
                        <!-- Select2 -->
                        <select v-model="newReservation.number_of_people" class="selection-1" name="people">
                            <option>1 person</option>
                            <option>2 people</option>
                            <option>3 people</option>
                            <option>4 people</option>
                            <option>5 people</option>
                            <option>6 people</option>
                            <option>7 people</option>
                            <option>8 people</option>
                            <option>9 people</option>
                            <option>10 people</option>
                            <option>11 people</option>
                            <option>12 people</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <!-- Name -->
                    <span class="txt9">
                        Name
                    </span>

                    <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                        <input v-model="newReservation.name" class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" placeholder="Name">
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- Phone -->
                    <span class="txt9">
                        Phone
                    </span>

                    <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                        <input v-model="newReservation.phone" class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone" placeholder="Phone">
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- Email -->
                    <span class="txt9">
                        Email
                    </span>

                    <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
                        <input v-model="newReservation.email" class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="Email">
                    </div>
                </div>

            </div>

            <div class="wrap-btn-booking flex-c-m m-t-6">
                <button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
                    Book Table
                </button>
            </div>
        </form >
    </div>
</template>

<script>
    export default {
        props: {
            page: {
                default: "reservation.blade.php"
            }
        },

        computed: {
            layout () {
                return (this.page === "reservation.blade.php") ? "wrap-form-reservation size22 m-l-r-auto" : "wrap-form-booking"
            }
        },

        data () {
            return {
                newReservation: {
                    name: "",
                    time: "",
                    date: "",
                    phone: "",
                    email: "",
                    number_of_people: ""
                }
            }
        },

        methods: {

            store() {
                axios.post('/ajax/reservations/store', this.newReservation)
                    .then((resp) => {
                        alert(resp.data.message)
                    })
                    .catch((err) => {
                        alert(err.response.data.message)
                    })
            }

        }
    }
</script>

<style scoped>

</style>