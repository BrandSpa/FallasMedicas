import React, { Component } from 'react';

class PostSlide extends Component {

  openPost = () => {
    setTimeout(() => {
      window.location = this.props.post.guid;
    });
  }

  getDate = ( dateStr ) => {
    let date = new Date(dateStr);

    return date.getDay() +'.'+date.getMonth()+'.'+date.getFullYear();

  }

  render() {
    const { post, total } = this.props;
    let postWidth = `${200 / (total * 2)}%`;

    if(this.props.mobile) {
      postWidth = `${100 / total}%`;
    }

    return (
      <div className="post-slide" style={{width: postWidth, float: 'left'}}>
        <div className="post-slide__content">
          <div className="post-slide__header">
            <span>{this.getDate(post.post_date)}</span> 
          </div>
          <a href={post.guid}>
            <h4 className="post-slide__title">{post.post_title}</h4>
          </a>
          <div className="post-slide__image">
            <img src={post.post_image} />
          </div>
          <a href={post.guid} className="post-slide__link">LEER MÁS</a>
        </div>
      </div>
    )
  }

}

export default PostSlide;
