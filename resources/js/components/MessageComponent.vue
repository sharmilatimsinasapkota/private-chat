<template>
                <div class="card   card-default chat-box" v-if="open" >
                    <div class="card-header">Chats
                        <a href="" @click.prevent="close">
                                <i class="fa fa-times float-right" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="card-body" v-chat-scroll>
                         <p class="card-text" v-for="(chat,index) in chats" :key="index">
                                {{ chat.message }}
                            </p>
                    </div>
                    <form class="card-footer" @submit.prevent="send">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Write your message here">
                        </div>
                    </form>
                </div>
</template>

<script>
    export default {
        data(){
            return{
                chats:[],
                open:true
            }
        },
        methods:{
              send(){
                  console.log('hey hey');
              },
              close(){
                    this.open=false
              }

        },
        created(){
            this.chats.push(
                {message:'Heyy'},
                {message:'How are you'},
                {message:'How are you'},
                {message:'How are you'},
                {message:'How are you'},
                {message:'How are you'},
                {message:'How are you'},
                {message:'How are you'},
                {message:'How are you'},
                {message:'How are you'},
                {message:'How are you'},
                {message:'How are you'},
                {message:'How are you bottom'},

                );
        }
    }
</script>
<style>
.chat-box{  
        height: 400px;
}

.card-body {
    overflow-y: scroll ! important;
}
</style>