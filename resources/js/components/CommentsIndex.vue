<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputcomment" v-model="content">
                        <input type="hidden"  v-model="post_id" v-bind="comments.post_id">
                        <button type="button" class="btn btn-primary" @click="addComment">Add</button>
                    </div>
                </div>
                <div class="card" v-for="comment in comments" :key="comment.id">
                    <div class="card-header">
                        <input type="text" class="form-control" id="comment" v-model="comment.content">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import api from "../api.js"
    export default {
        data(){
            return {
                active_comment: null,
                content:"",
                post_id:"",
                comments:[]
            }
        },
        methods:{
            addComment(){
                let data = {
                  content:this.comment_form,
                  post_id:this.post_id
                  }
                data._token = document.getElementsByName('csrf-token')[0].container;
                api.postComment(JSON.stringify(data)).then(()=>{
                    this.getCommentList()
                })
            },
            getCommentList(){
                api.getCommentList().then((result)=>{
                    this.comments = result
                })
            }
        },
        mounted() {
            this.getCommentList()
            console.log('Component mounted.')
        }
    }
</script>