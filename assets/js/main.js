(function() {
    const notification = document.querySelector('.js-notification')
    const btnPlay = document.querySelector('.js-btn-play')
    const btnDisable = document.querySelector('.js-btn-disable')
    const items = document.getElementsByClassName('js-item' ) 
    const play2Items = document.getElementsByClassName('js-play2-item')

    let accountants = {
        'play 1': {
            'playerCounter': 0
        },

        'play 2': {
            'playerCounter': 0
        }
    }

    const winningCombinations = {
        0: {
            'play1'  : 'papel',
            'play2' : 'tesoura',
            'vencedor' : 'play 2'
        },

        1: {
            'play1' : 'papel',
            'play2' : 'pedra',
            'vencedor': 'play 1'
        },

        2: {
            'play1' : 'papel',
            'play2' : 'papel',
            'vencedor': 'empate'
        },

        3: {
            'play1' : 'tesoura',
            'play2' : 'papel',
            'vencedor': 'play 1'
        },

        4: {
            'play1' : 'tesoura',
            'play2' : 'pedra',
            'vencedor': 'play 2'
        },

        5: {
            'play1' : 'tesoura',
            'play2' : 'tesoura',
            'vencedor': 'empate'
        },

        6: {
            'play1' : 'pedra',
            'play2' : 'tesoura',
            'vencedor': 'play 1'
        },

        7: {
            'play1' : 'pedra',
            'play2' : 'papel',
            'vencedor': 'play 2'
        },

        8: {
            'play1' : 'pedra',
            'play2' : 'pedra',
            'vencedor': 'empate'
        },
    }

    for( const i of items ) {
        i.addEventListener( 'click', function() {
            for( const j of items )
                j.classList.remove( 'is-active' )  

            this.classList.add( 'is-active' )
        })
    }

    btnPlay.addEventListener( 'click', function() {
        findWinner()
    })

    btnDisable.addEventListener( 'click', function() {
        disableActiveItems()
    })

    function findWinner() {
        for(const item of items) {
            if( item.classList.contains('is-active')) {
                let play2 = getRandomInt()

                for(const l of play2Items)
                    l.classList.remove('is-active')

                play2Items[play2].classList.add('is-active')
                item.classList.add('is-active')

                Object.keys(winningCombinations).forEach(key => {
                    if(winningCombinations[key].play1 == item.dataset.value && winningCombinations[key].play2 == play2Items[play2].dataset.value) {
                        activeNotification(winningCombinations[key].vencedor)
                        pointCounter(winningCombinations[key].vencedor)
                    }
                })
            }   
        } 
    }

    function getRandomInt() {         
        return Math.floor(Math.random() * 3)
    }

    function activeNotification(result) {
        notification.classList.add('is-active') 
        notification.innerText = 'Vencedor ' + result
    }

    function disableActiveItems() {
        const allItems = document.getElementsByClassName('js-all-items')

        for(const i of allItems)
            i.classList.remove('is-active')
            notification.classList.remove('is-active') 
    }

    function pointCounter( result ) {
        console.log(result)
        const points = document.querySelector('.js-point').getElementsByTagName('p')

        Object.keys(accountants).forEach(key => {
            if(key == result ) {
                accountants[key].playerCounter += 1

                for(const i of points) {
                    if(i.dataset.value == result)
                        i.innerText = 'Vencedor ' + accountants[key].playerCounter
                }
            }
        }) 
    }
})()