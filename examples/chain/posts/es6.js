class PostsES6 {
  constructor(content = null) {
    this.content = content;
  }
  printContent() {
    console.log(`Print from method: ${this.content}`);
    return this;
  }
}

const postES6 = new PostsES6("Post content");
const contentES6 = postES6.printContent().content;
console.log(contentES6);
