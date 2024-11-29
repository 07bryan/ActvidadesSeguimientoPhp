@extends('layouts.app')

@section('content')
    <h1>Juego de Memoria</h1>

    <p>Haz coincidir las cartas. ¡Buena suerte!</p>

    <div id="memory-board" class="memory-board">
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const cards = [
                { name: 'apple', image: 'apple.jpg' },
                { name: 'banana', image: 'banana.jpg' },
                { name: 'cherry', image: 'cherry.jpg' },
                { name: 'grape', image: 'grape.jpg' },
                { name: 'orange', image: 'orange.jpg' },
                { name: 'pear', image: 'pear.jpg' },
                { name: 'apple', image: 'apple.jpg' },
                { name: 'banana', image: 'banana.jpg' },
                { name: 'cherry', image: 'cherry.jpg' },
                { name: 'grape', image: 'grape.jpg' },
                { name: 'orange', image: 'orange.jpg' },
                { name: 'pear', image: 'pear.jpg' },
            ];

            let flippedCards = [];
            let matchedCards = [];

            function createCard(card, index) {
                const cardElement = document.createElement('div');
                cardElement.classList.add('card');
                cardElement.setAttribute('data-name', card.name);
                cardElement.setAttribute('data-index', index);

                const front = document.createElement('div');
                front.classList.add('card-front');
                const back = document.createElement('div');
                back.classList.add('card-back');
                back.style.backgroundImage = `url('/images/${card.image}')`;

                cardElement.appendChild(front);
                cardElement.appendChild(back);
                return cardElement;
            }

            function shuffleCards() {
                cards.sort(() => Math.random() - 0.5);
                const memoryBoard = document.getElementById('memory-board');
                memoryBoard.innerHTML = '';

                cards.forEach((card, index) => {
                    const cardElement = createCard(card, index);
                    memoryBoard.appendChild(cardElement);
                });
            }

            function flipCard(cardElement) {
                if (flippedCards.length < 2 && !cardElement.classList.contains('flipped') && !cardElement.classList.contains('matched')) {
                    cardElement.classList.add('flipped');
                    flippedCards.push(cardElement);

                    if (flippedCards.length === 2) {
                        setTimeout(checkMatch, 1000);
                    }
                }
            }

            function checkMatch() {
                const [firstCard, secondCard] = flippedCards;

                if (firstCard.getAttribute('data-name') === secondCard.getAttribute('data-name')) {
                    firstCard.classList.add('matched');
                    secondCard.classList.add('matched');
                    matchedCards.push(firstCard, secondCard);
                } else {
                    firstCard.classList.remove('flipped');
                    secondCard.classList.remove('flipped');
                }

                flippedCards = [];

                if (matchedCards.length === cards.length) {
                    alert('¡Felicidades, has ganado!');
                }
            }
            shuffleCards();

            document.getElementById('memory-board').addEventListener('click', (event) => {
                const cardElement = event.target.closest('.card');
                if (cardElement) {
                    flipCard(cardElement);
                }
            });
        });
    </script>

    <style>
        .memory-board {
            display: grid;
            grid-template-columns: repeat(4, 100px);
            grid-gap: 10px;
            margin-top: 20px;
        }

        .card {
            width: 100px;
            height: 100px;
            border: 1px solid #ccc;
            border-radius: 8px;
            cursor: pointer;
            perspective: 1000px;
        }

        .card .card-front,
        .card .card-back {
            width: 100%;
            height: 100%;
            border-radius: 8px;
            position: absolute;
            backface-visibility: hidden;
            transition: transform 0.5s;
        }

        .card .card-back {
            transform: rotateY(180deg);
        }

        .card.flipped .card-back {
            transform: rotateY(0deg);
        }

        .card.flipped .card-front {
            transform: rotateY(180deg);
        }

        .card.matched {
            background-color: #8bc34a;
        }
    </style>
@endsection
