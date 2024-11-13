<!DOCTYPE html>
<html>
<head>
    <title>Typewriters</title>
    <style>
        #app {
            border: dashed black 1px;
            width: 130px;
            padding-left: 20px;
            font-weight: bold;
            background-color: lightgreen;
        }
    </style>
</head>
<body>

<h1>Example with 'v-if' and 'v-else'</h1>

<p>Try changing the 'typewritersInStock' value in the Vue instance from 'true' to 'false' and run the code again.</p>

<div id="app">
    <p v-if="typewritersInStock">
        in stock
    </p>
    <p v-else>
        not in stock
    </p>

    <button v-bind:class="btnClass" @click="clickMe">CLICK ME</button>
</div>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script>
    const app = Vue.createApp({
        data() {
            return {
                typewritersInStock: false,
                counter:0,
                btnClass:''
            }
        },
        methods:{
            clickMe(){
                this.counter++;
                this.btnClass = "newbtn";
                console.log("Counter: "+this.counter);
            }
        }
    })
    app.mount('#app')
</script>

</body>
</html>