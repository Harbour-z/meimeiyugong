<main class="main">
  <aside class="sidebar">
    <nav class="nav">
      <ul>
        <li><a href="https://www.realibox.com/file?id=57095014e1e8fa3a9cec4bb1c024a38c">3D展示</a></li>
        <li><a href="wenwu.php">文物之美</a></li>
        <li><a href="gongyi.php">工艺之美</a></li>
        <li><a href="wenhua.php">文化传承</a></li>
        <li><a href="guanyu.php">关于</a></li>
      </ul>
    </nav>
  </aside>
</main>

<style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans');

html {
  font-family: "kaiti";;
  font-size: 26px;
}

.sidebar {
  position: fixed;
  width: 25%;
  height: 110vh;
  background: wheat;
  font-size: 0.65em;
}

.nav {
  position: relative;
  margin: 0 15%;
  text-align: right;
  top: 50%;
  transform: translateY(-50%);
  font-weight: bold;
}

.nav ul {
  list-style: none;
  
  li {
    position: relative;
    margin: 1.0em 0;
    
    a {
      line-height: 4em;
      text-transform: uppercase;
      text-decoration: none;
      letter-spacing: 0.4em;
      color: #9c8e74;
      display: block;
      transition: all ease-out 300ms;
    }
    
    &.active a {
      color: black;
    }
    
    &:not(.active)::after {
      opacity: 0.2;
    }
    
    &:not(.active):hover a {
      color: black;
    }
    
    &::after {
      content: '';
      position: absolute;
      width: 100%;
      height: 0.2em;
      background: black;
      left: 0;
      bottom: 0;
      background-image: #736956;
    }
  }
}

</style>