<template>
  <div class="content">
    <div class="project">
      <h3>Room (2020)</h3>
      <p>
        These models have been made to model my next apartment in 3d. Some items
        are cut in half because the library to render 3d models doesn't support
        the mirror modifier...
      </p>
      <div class="row">
        <div class="col-sm-4 overflow-auto" style="max-height: 600px;">
          <div
            class="w-100 border pointer px-2"
            v-for="(filename, i) in roomFilenames"
            :key="i"
            @click="selectedRoomFilename = filename"
            :style="{
              'background-color':
                selectedRoomFilename === filename ? '#efefef' : 'white',
            }"
          >
            {{ filename }}
          </div>
        </div>
        <div class="col-sm-8" style="max-height: 600px;">
          <model-gltf
            :backgroundColor="0xeeeeee"
            class="item"
            :cameraPosition="{ x: -3, y: 1, z: 0 }"
            :src="`models/room/${selectedRoomFilename}.gltf`"
          ></model-gltf>
        </div>
      </div>
    </div>
    <div class="project">
      <h3>Characters (2020)</h3>
      <p>These models have been made for multiple projects overtime.</p>
      <div class="row">
        <div class="col-sm-4 overflow-auto" style="max-height: 600px;">
          <div
            class="w-100 border pointer px-2"
            v-for="(filename, i) in charactersFilenames"
            :key="i"
            @click="selectedCharacterFilename = filename"
            :style="{
              'background-color':
                selectedCharacterFilename === filename ? '#efefef' : 'white',
            }"
          >
            {{ filename }}
          </div>
        </div>
        <div class="col-sm-8" style="max-height: 600px;">
          <model-gltf
            :backgroundColor="0xeeeeee"
            class="item"
            :cameraPosition="{ x: -3, y: 1, z: 0 }"
            :src="`models/characters/${selectedCharacterFilename}.gltf`"
          ></model-gltf>
        </div>
      </div>
    </div>
    <div class="project">
      <h3>Terrain (2020)</h3>
      <p>These models have been made through multiple projects...</p>
      <div class="row">
        <div class="col-sm-4 overflow-auto" style="max-height: 600px;">
          <div
            class="w-100 border pointer px-2"
            v-for="(filename, i) in terrainFilenames"
            :key="i"
            @click="selectedTerrainFilename = filename"
            :style="{
              'background-color':
                selectedTerrainFilename === filename ? '#efefef' : 'white',
            }"
          >
            {{ filename }}
          </div>
        </div>
        <div class="col-sm-8" style="max-height: 600px;">
          <model-gltf
            :backgroundColor="0xeeeeee"
            class="item"
            :cameraPosition="{ x: -3, y: 1, z: 0 }"
            :src="`models/terrain/${selectedTerrainFilename}.gltf`"
          ></model-gltf>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { ModelGltf } from "vue-3d-model";
export default {
  name: "Models",
  components: { ModelGltf },
  data() {
    return {
      roomFilenames: [
        "armchair",
        "bed",
        "book1",
        "book2",
        "briefcase1",
        "briefcase2",
        "briefcase3",
        "cabinet",
        "cactus1",
        "cactus2",
        "cactus3",
        "cajon",
        "can",
        "chair",
        "chair2",
        "chair3",
        "desk",
        "desk2.glb",
        "desktop",
        "didjeridoo",
        "dogfeeder",
        "fridge",
        "furniture1",
        "furniture2",
        "furniture3",
        "glass",
        "guitar",
        "guitaramp",
        "guitarstand",
        "keyboard",
        "kitchenfurtniture",
        "lamp",
        "lamp2",
        "lamp3",
        "laptop",
        "longtable",
        "luggage1",
        "luggage2",
        "mouse",
        "mug",
        "piano1",
        "piano2",
        "plantholder",
        "redCube",
        "screen",
        "screen2",
        "shorttable",
        "single_window",
        "smalltable",
        "sofa",
        "sofa2",
        "speaker",
        "stool",
        "storagefurniture",
        "studiomonitor",
        "table1",
        "table2",
        "table3",
        "trash.glb",
        "trash2",
        "tvfurniture",
        "wardrobe",
        "waterbottle",
        "window",
      ],
      selectedRoomFilename: "book1",
      charactersFilenames: [
        "brok",
        "charactertemplate",
        "chick",
        "Dragon",
        "fish",
        "flamey",
        "gordil",
        "human",
        "kyra",
        "minotor",
        "misaki",
        "Necro",
        "Newton",
        "Rake",
        "RockElemental",
        "Uldor",
        "Yoshiro",
      ],
      selectedCharacterFilename: "brok",
      terrainFilenames: [
        "bridge",
        "bridge3",
        "cloud1",
        "cloud2",
        "cloud3",
        "Jaw",
        "plane2",
        "plane3",
        "Ship",
        "tree1",
        "tree2",
        "Tree3",
        "TreeLog",
      ],
      selectedTerrainFilename: "bridge",
    };
  },
};
</script>
