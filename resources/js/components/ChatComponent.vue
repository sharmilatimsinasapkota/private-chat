<template>
    <div class="container">
        <div class="row ">
            <div class="col-md-3">
                <div class="card   card-default">
                    <div class="card-header">Private Chat App</div>
                            <ul class="list-group">
                                <li class="list-group-item">ChatUser 1</li>
                                <li class="list-group-item">ChatUser 2</li>
                            </ul>
                </div>
            </div>
            <div class="col-md-9">
                <message-component></message-component>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
