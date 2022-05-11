<template>
  <div class="content">
    <div class="project">
      <h3>The Metaforge NFT ERC-721 (2021)</h3>
      <p>
        We decided to dynamically generate
        random weapons as NFTs for video games.<br/>
        For that we created a generator in Python, an ERC-721 based on Openzeppelin smart contracts with Truffle in Solidity.
        We then made a website with web3 that allows users to connect with Metamask and mint new ERC-721 tokens.<br/>
        After minting the new owners can consult their new NFTs directly on Opensea.<br/>
        NFTs' metadata is stored on IPFS and hosted by Pinata.<br/>
        The source code is still closed for now.
      </p>

      <div class="columns">
        <img class="item" src="projects/metaforge/1.png" />
      </div>
    </div>
    <div class="project">
      <h3>ChambauCoin ERC-20 (2020)</h3>
      <p>
        Creating a ERC-20 currency on the Ethereum blockchain with a simple
        VueJS webapp for the ICO, for fun.

        <a href="https://github.com/Drabble/ChambauCoin"
          >ChambauCoin on Github</a
        ><br />
      </p>

      <div class="columns">
        <img class="item" src="projects/ChambauCoin/1.png" />
        <img class="item" src="projects/ChambauCoin/2.png" />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "MachineLearning",
  components: {},
};
</script>
