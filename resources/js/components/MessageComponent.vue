<template>
  <div class="card card-default chat-box" v-if="open">
    <div class="card-header">
        <b :class="{'text-danger':session_block}">
            User Name
            <span v-if="session_block">(Blocked)</span>
        </b>
      <a href @click.prevent="close">
        <i class="fa fa-times float-right" aria-hidden="true"></i>
      </a>

      <div class="dropdown float-right mr-4">
        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#"   v-if="session_block"  @click.prevent="unblock">UnBlock</a>
            <a class="dropdown-item" href="#" v-else    @click.prevent="block">Block</a>
          <a class="dropdown-item" href="#" @click.prevent="clear">Clear Chat</a>
        </div>
      </div>
    </div>

    <div class="card-body" v-chat-scroll>
      <p class="card-text" v-for="(chat,index) in chats" :key="index">{{ chat.message }}</p>
    </div>
    <form class="card-footer" @submit.prevent="send">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Write your message here" :disabled="session_block" />
      </div>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      chats: [],
      open: true,
      session_block:false //method and variable name cannot be same in vuejs
    };
  },
  methods: {
    send() {
      console.log("hey hey");
    },
    close() {
      this.open = false;
    },
    clear(){
        this.chats=[];
    },
    block(){
        this.session_block=true;
    },
    unblock(){
        this.session_block=false;
    }
  },
  created() {
    this.chats.push(
      { message: "Heyy" },
      { message: "How are you" },
      { message: "How are you" },
      { message: "How are you" },
      { message: "How are you" },
      { message: "How are you" },
      { message: "How are you" },
      { message: "How are you" },
      { message: "How are you" },
      { message: "How are you" },
      { message: "How are you" },
      { message: "How are you" },
      { message: "How are you bottom" }
    );
  },
};
</script>
<style>
.chat-box {
  height: 400px;
}

.card-body {
  overflow-y: scroll !important;
}
</style>