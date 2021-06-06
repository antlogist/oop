function PostsES5(content = null) {
  this.content = content;
  this.printContent = function () {
    console.log(`Print from method: ${this.content}`);
    return this;
  }
}

const postES5 = new PostsES5("Post content");
const contentES5 = postES5.printContent().content;
console.log(contentES5);
