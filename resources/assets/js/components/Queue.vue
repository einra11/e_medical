<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default mb-5">
                    <div class="card-header"> <h1> Now Serving</h1></div>

                    <div class="card-body">
                        <h1 v-if="nowServing == null">No queue</h1>
                        <h1>{{nowServing}}</h1>
                        <button @click="nextServe()" class="btn btn-primary my-5">Next</button>
                        <button @click="addServe()" class="btn btn-primary my-5">Add</button>
                        <ul class="list-group">
                        <li v-for="item in onStack" :key="item.id" class="list-group-item">{{item}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return {
                nowServing:null,
                counter:null,
                onStack:[],
                isActive:'list-group-item active'
            }
        },
        methods: {
            nextServe: function(){
                this.onStack.splice(this.onStack[-1],1)
                this.nowServing = this.onStack[0]
            },
            addServe: function(){
                this.counter +=1
                this.onStack.push(this.counter)
                this.nowServing = this.onStack[0]
            }
        },
    }
</script>
