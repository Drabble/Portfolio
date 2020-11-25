<template>
  <div class="content">
    <div class="project">
      <h3>Predicting cryptocurrencies price using LSTM (2020)</h3>
      <p>
        Trying to predict a cryptocurrencies' price using historical data from the Binance API and a LSTM network with Keras and TensorFlow.
        You can predict any cryptocurrency available on the Binance API.
        <a
          href="https://github.com/Drabble/CryptoPredictions"
        >Github</a><br/>
      </p>
      <div class="columns">
        <img class="item" src="projects/CryptoPrediction/1.jpeg" />
        <img class="item" src="projects/CryptoPrediction/2.png" />
        <img class="item" src="projects/CryptoPrediction/3.png" />
        <img class="item" src="projects/CryptoPrediction/4.png" />
        <img class="item" src="projects/CryptoPrediction/5.png" />
        <img class="item" src="projects/CryptoPrediction/6.png" />
        <img class="item" src="projects/CryptoPrediction/7.png" />
        <img class="item" src="projects/CryptoPrediction/8.png" />
        <img class="item" src="projects/CryptoPrediction/9.png" />
        <img class="item" src="projects/CryptoPrediction/10.png" />
        <img class="item" src="projects/CryptoPrediction/11.png" />
        <img class="item" src="projects/CryptoPrediction/12.png" />
        <img class="item" src="projects/CryptoPrediction/13.png" />
        <img class="item" src="projects/CryptoPrediction/14.png" />
        <img class="item" src="projects/CryptoPrediction/15.png" />
        <img class="item" src="projects/CryptoPrediction/16.png" />
      </div>
    </div>
    <div class="project">
      <h3>Music generation with neural networks (2019-2020)</h3>
      <p>
        Generating music using Auto Encoder neural networks in a few steps.
        <ul>
          <li>Retrieve all video games midi files from <a href="https://www.vgmusic.com/">https://www.vgmusic.com/</a></li>
          <li>Transform midi files to a 2d matrix</li>
          <li>Train the auto-encoder network on the data</li>
          <li>Make some visualisations</li>
          <li>Generate new songs with the trained network by inserting some data in the latent space</li>
          </ul>

          The first few tries were based on the most basic auto-encoder neural network you can make but the generated music were a little bit too random. <br/>
          Then I tried using Variational Auto Encoder (VAE). The results were better. The latent space is modified so that it follows a normal distribution.
          This way, the values inserted into the latent space during generation of new music can be sampled randomly from the normal distribution.
          I have also tried inserting convolutions into the encoder and decoders but the result was worse. 
          The localisation of midi notes is to sparse to be recognisable by the filters of the convolutional network.<br/>
          
        <a
          href="https://github.com/Drabble/MusicGenerationVAEs"
        >Github - private</a><br/>
        Here are 3 examples of music generated using the VAE method.<br/>

          
        <audio class="item" controls>
          <source src="projects/AEmusic/Gen1.m4a" type="audio/mpeg" />
          Your browser does not support the audio element.
        </audio>
        <audio class="item" controls>
          <source src="projects/AEmusic/Gen2.m4a" type="audio/mpeg" />
          Your browser does not support the audio element.
        </audio>
        <audio class="item" controls>
          <source src="projects/AEmusic/Gen3.m4a" type="audio/mpeg" />
          Your browser does not support the audio element.
        </audio>
      </p>
      <div class="columns">
        <img class="item" src="projects/AEmusic/1.png" />
        <img class="item" src="projects/AEmusic/2.png" />
      </div>
    </div>

    <div class="project">
      <h3>Twitter Sentiment Analysis and Cryptocurrencies (2018)</h3>
      <p>
        Analysis of Twitter Sentiment, computation of a score and correlation
        with cryptocurrencies historic data. Based on Jupyter Notebooks in
        Python. It also contains a real time viewer of the correlation with
        NodeJS and Plotly. Source and documentation on
        <a
          href="https://github.com/servietsky777/TwitterSentimentAndCryptocurrencies"
        >Github</a>
      </p>
      <div class="columns">
        <img class="item" src="projects/TwitterSentimentAnalysisAndCryptocurrencies/1.png" />
        <img class="item" src="projects/TwitterSentimentAnalysisAndCryptocurrencies/2.png" />
        <img class="item" src="projects/TwitterSentimentAnalysisAndCryptocurrencies/3.png" />
        <img class="item" src="projects/TwitterSentimentAnalysisAndCryptocurrencies/4.png" />
        <img class="item" src="projects/TwitterSentimentAnalysisAndCryptocurrencies/5.png" />
        <img class="item" src="projects/TwitterSentimentAnalysisAndCryptocurrencies/6.png" />
        <img class="item" src="projects/TwitterSentimentAnalysisAndCryptocurrencies/7.png" />
        <img class="item" src="projects/TwitterSentimentAnalysisAndCryptocurrencies/8.png" />
        <img class="item" src="projects/TwitterSentimentAnalysisAndCryptocurrencies/9.png" />
        <img class="item" src="projects/TwitterSentimentAnalysisAndCryptocurrencies/10.png" />
        <img class="item" src="projects/TwitterSentimentAnalysisAndCryptocurrencies/11.png" />
        <img class="item" src="projects/TwitterSentimentAnalysisAndCryptocurrencies/12.png" />
        <img class="item" src="projects/TwitterSentimentAnalysisAndCryptocurrencies/13.png" />
        <img class="item" src="projects/TwitterSentimentAnalysisAndCryptocurrencies/14.png" />
        <img class="item" src="projects/TwitterSentimentAnalysisAndCryptocurrencies/15.png" />
        <img class="item" src="projects/TwitterSentimentAnalysisAndCryptocurrencies/16.png" />
        <img class="item" src="projects/TwitterSentimentAnalysisAndCryptocurrencies/17.jpg" />
        <img class="item" src="projects/TwitterSentimentAnalysisAndCryptocurrencies/18.png" />
        <img class="item" src="projects/TwitterSentimentAnalysisAndCryptocurrencies/19.png" />
        <img class="item" src="projects/TwitterSentimentAnalysisAndCryptocurrencies/20.png" />
        <img class="item" src="projects/TwitterSentimentAnalysisAndCryptocurrencies/21.png" />
        <img class="item" src="projects/TwitterSentimentAnalysisAndCryptocurrencies/22.png" />
        <img class="item" src="projects/TwitterSentimentAnalysisAndCryptocurrencies/23.png" />
        <img class="item" src="projects/TwitterSentimentAnalysisAndCryptocurrencies/24.png" />
      </div>
    </div>

    <div class="project">
      <h3>8-Puzzle Solver (2018)</h3>
      <p>
        School project to implement an multicore application with OpenMP in C to
        find the shortest solution for the 8-Puzzle. Source on
        <a
          href="https://github.com/servietsky777/8Puzzle-Solver"
        >Github</a>
      </p>
    </div>
  </div>
</template>

<script>
export default {
  name: "MachineLearning",
  components: {},
};
</script>
