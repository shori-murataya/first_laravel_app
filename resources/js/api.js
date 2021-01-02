"use strict"


const send = (method,uri,data={}) => {
    const url = 'http://localhost:80' + uri
    return new Promise((resolve)=>{
        var xhr = new XMLHttpRequest();
        xhr.open(method, url);
        xhr.setRequestHeader("Content-Type", "application/json; charset=utf-8");
        xhr.onload = () => {
            try{
                const res_json = JSON.parse(xhr.responseText)
                resolve(res_json)
            }catch (e) {
                resolve(xhr.responseText)
            }
        }
        xhr.onerror = () => {
            console.log(xhr.status);
            console.log("error!");
        };
        xhr.send(data);
    })
}

const api = {
    getCommentList(){
        return send("GET","/api/comment");
    },
    postComment(comment,post_id){
        return send("POST","/api/comment",comment, post_id);
    },
}


export default api