<template>
    <div id="addmovie">
        <div class="form-group">
            <label for="title">Movie name : </label>
            <input type="text" class="form-control" id="title" name="title" required v-model="newItem.title"
                placeholder=" Enter movie name">
        </div>

        <div class="form-group">
            <label for="director">Director : </label>
            <input type="text" class="form-control" id="director" name="director" required v-model="newItem.director"
                placeholder=" Director name">
        </div>

        <div class="form-group">
            <label for="link">Youtube Link : </label>
            <input type="url" class="form-control" id="link" name="link" required v-model="newItem.link" placeholder=" Youtube Url">

        </div>


        <div class="form-group">
            <label for="release">Release Date : </label>
            <input type="numers" class="form-control" id="release" name="release" required v-model="newItem.release"
                placeholder=" Enter the release date">
        </div>

        <div class="form-group">
            <label for="synopsis">Synopsis:</label>
            <input type="text" class="form-control" id="synopsis" name="synopsis" required v-model="newItem.synopsis"
                placeholder=" Enter synopsis"> <br>
            <p class="text-center alert alert-danger" v-if="seen"> Please fill all fields </p>
            <p class="text-center alert alert-success" v-if="movieadd">Your Movie is added</p>
        </div>

        <button class="btn btn-primary" @click.prevent="createItem()">
            <span class="glyphicon glyphicon-plus"></span> ADD
        </button>
        <br>

        <table class="table table-borderless" id="table-movie">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Director</th>
                    <th>Link</th>
                    <th>Date</th>
                    <th>Synopsis</th>
                </tr>
            </thead>
            <tr>

                <!-- <td>{{slide.title}}</td> -->
                <td>Christopher Nolan</td>
                <td><a href="https://youtu.be/HsPP6xSzQoE">https://youtu.be/HsPP6xSzQoE</a></td>
                <td>2014</td>
                <td>Alors que la Terre se meurt, une équipe d'astronautes franchit un trou de ver apparu près de
                    Saturne et conduisant à une autre galaxie, afin d'explorer un nouveau système stellaire et dans
                    l'espoir de trouver une planète habitable pour sauver l'humanité.</td>
            </tr>

        </table>


    </div>

</template>

<script>
    export default {
        data() {
            return {
                items: [],
                seen: false,
                movieadd: false,
                newItem: {
                    'title': '',
                    'synopsis': '',
                    'release': '',
                    'director': '',
                    'link': ''
                },
            }

        },
        methods: {
            createItem: function createItem() {
                var inputMovie = this.newItem;
                var _this = this;
                console.log(inputMovie);

                if (inputMovie['title'] == '' || inputMovie['release'] == '' || inputMovie['synopsis'] == '' ||
                    inputMovie['director'] == '' || inputMovie['link'] == '') {
                    this.seen = true;
                    this.movieadd = false;
                } else {
                    this.movieadd = true;
                    this.seen = false;
                    axios.post('/films', inputMovie).then((response) => {
                        window.location = response.data.redirect;
                    });
                }     
        }
    }
    }

</script>

<style scooped>
    body {
                background-color: #000010;
                color: white;
                font-size: 12px;
                position: absolute;
            }
            
            button {
                border: none;
                border-radius: 5px;
                font-size: 10px;
                background-color: #002E62;
                color: white;
            }

</style>
