<template>
  <div id="app">
    <nav class="navbar navbar-expand-sm navbar-light m-0">
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <router-link class="nav-link" to="/home">Home</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/game">Game</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/software">Software</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/website">Website</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/machine-learning"
              >Machine Learning</router-link
            >
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/blockchain"
              >Blockchain</router-link
            >
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/3d">3d</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/diy">Diy</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/design">Design</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/music">Music</router-link>
          </li>
        </ul>
      </div>
      <router-link class="navbar-brand mr-1 ml-0" to="/home">
        <img
          alt="Vue logo"
          class="logo"
          src="images/logo.png"
          style="color: #bc9c7f; width: 40px; height: 40px"
        />
      </router-link>
    </nav>
    <router-view />
    <div class="footer">
      Made by
      <a href="https://github.com/drabble">Antoine Drabble</a> - 2020
    </div>
  </div>
</template>
<script>
//import UpdateSWPrompt from "@/components/Prompt/UpdateSWPrompt";
export default {
  components: {
    //UpdateSWPrompt
  },
  watch: {
    "$i18n.locale"() {
      localStorage.setItem("lang", this.$i18n.locale);
    },
  },
  data() {
    return {
      langs: [
        { text: "English", value: "en" },
        { text: "Français", value: "fr" },
        { text: "Deutsch", value: "de" },
      ],
    };
  },
  created() {},
  mounted() {
    if (localStorage.getItem("lang")) {
      this.$i18n.locale = localStorage.getItem("lang");
    }
  },
};
</script>
<style lang="scss">
.navbar-light {
  .navbar-nav {
    .nav-link {
      font-weight: bold;
      color: black;

      &.router-link-active {
        color: rgb(188, 156, 127);
      }
      &.router-link-exact-active {
        color: rgb(188, 156, 127);
      }
    }
  }
}
h3 {
  margin-bottom: 20px;
}
.logo {
  transition: all 0.3s;
  animation-iteration-count: infinite;
  animation-timing-function: cubic-bezier(0.075, 0.82, 0.165, 1);
  &:hover {
    animation-name: rotatecw;
    animation-duration: 2s;
  }
  @keyframes rotatecw {
    from {
      transform: rotateX(0deg);
    }
    to {
      transform: rotateY(360deg);
    }
  }
}
/* Footer */
.footer {
  padding: 60px;
  text-align: center;
}
@media (max-width: 576px) {
  .navbar-collapse {
    border-bottom: 1px solid black;
    padding-bottom: 20px;
    padding-top: 20px;
    margin-bottom: 20px;
  }
}
</style>
