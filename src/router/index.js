import Vue from "vue";
import VueRouter from "vue-router";
import Home from "../views/Home.vue";

Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    redirect: "/home",
  },
  {
    path: "/home",
    name: "Home",
    component: Home,
  },
  {
    path: "/game",
    name: "Game",
    component: () => import(/* webpackChunkName: "game" */ "../views/Game.vue"),
  },
  {
    path: "/design",
    name: "Design",
    component: () =>
      import(/* webpackChunkName: "design" */ "../views/Design.vue"),
  },
  {
    path: "/diy",
    name: "Diy",
    component: () => import(/* webpackChunkName: "diy" */ "../views/Diy.vue"),
  },
  {
    path: "/music",
    name: "Music",
    component: () =>
      import(/* webpackChunkName: "music" */ "../views/Music.vue"),
  },
  {
    path: "/photography",
    name: "Photography",
    component: () =>
      import(/* webpackChunkName: "photography" */ "../views/Photography.vue"),
  },
  {
    path: "/software",
    name: "Software",
    component: () =>
      import(/* webpackChunkName: "software" */ "../views/Software.vue"),
  },
  {
    path: "/website",
    name: "Website",
    component: () =>
      import(/* webpackChunkName: "website" */ "../views/Website.vue"),
  },
  {
    path: "/machine-learning",
    name: "MachineLearning",
    component: () =>
      import(/* webpackChunkName: "website" */ "../views/MachineLearning.vue"),
  },
  {
    path: "/3d",
    name: "3d",
    component: () =>
      import(/* webpackChunkName: "website" */ "../views/Models.vue"),
  },
  {
    path: "/blockchain",
    name: "blockchain",
    component: () =>
      import(/* webpackChunkName: "website" */ "../views/Blockchain.vue"),
  },
];

const router = new VueRouter({
 routes,
});

export default router;
