<?php

namespace Blackjack;

require_once('Card.php');

use Blackjack\Card;

/**
 * デッキクラス
 */
class Deck
{
    /**
     * コンストラクタ
     *
     * @param Card $card
     * @param array $deck
     */
    public function __construct(
        private Card $card = new Card,
        private array $deck = []
    ) {
    }

    /**
     * deck プロパティを返す
     *
     * @return array
     */
    public function getDeck(): array
    {
        return $this->deck;
    }

    /**
     * デッキを初期化する
     *
     * @return array $this->deck
     */
    public function initDeck(): array
    {
        $this->deck = $this->card->createNewDeck();
        shuffle($this->deck);
        return $this->deck;
    }

    /**
     * カードを取られる
     *
     * @param integer $countOfCard
     * @return void
     */
    public function takeCard(int $countOfCard): void
    {
        $this->deck = array_slice($this->deck, $countOfCard);
    }
}
