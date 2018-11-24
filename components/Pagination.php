<?php

namespace App\components;

class Pagination
{
    const PREFIX_PAGE = 'p';

    /**
     * Ссылок навигации на страницу
     * @var int $max
     */
    private $max = 10;

    /**
     * Ключ для GET, в который пишется номер страницы
     * @var string $index
     */
    private $index;

    /**
     * Текущая страница
     * @var int $current_page
     */
    private $current_page;

    /**
     * Общее количество записей
     * @var int $total
     */
    private $total;

    /**
     * Записей на страницу
     * @var int $limit
     */
    private $limit;

    /**
     * @var int $amount
     */
    private $amount;

    /**
     * Pagination constructor.
     *
     * @param int $total
     * @param int $currentPage
     * @param int $limit
     * @param string $index
     */
    public function __construct($total, $currentPage, $limit, $index = self::PREFIX_PAGE)
    {
        # Устанавливаем общее количество записей
        $this->total = $total;
        # Устанавливаем количество записей на страницу
        $this->limit = $limit;
        # Устанавливаем ключ в url
        $this->index = $index;
        # Устанавливаем количество страниц
        $this->amount = $this->amount();

        # Устанавливаем номер текущей страницы
        $this->setCurrentPage($currentPage);
    }

    /**
     *  Для вывода ссылок
     * @return string HTML-код со ссылками навигации
     */
    public function get()
    {
        # Для записи ссылок
        $links = null;
        # Получаем ограничения для цикла
        $limits = $this->limits();

        if ($this->amount == 1) {
            return null;
        }

        $html = '<ul class="pagination">';
        # Генерируем ссылки
        for ($page = $limits[0]; $page <= $limits[1]; $page++) {
            # Если текущая это текущая страница, ссылки нет и добавляется класс active
            if ($page == $this->current_page) {
                $links .= '<li class="active"><a href="" onclick="return false">' . $page . '</a></li>';
            } else {
                # Иначе генерируем ссылку
                $links .= $this->generateHtml($page);
            }
        }
        # Если ссылки создались
        if (!is_null($links)) {
            # Если текущая страница не первая
            if ($this->current_page > 1)
                # Создаём ссылку "На первую"
                $links = $this->generateHtml(1, '&lt;') . $links;
            # Если текущая страница не первая
            if ($this->current_page < $this->amount)
                # Создаём ссылку "На последнюю"
                $links .= $this->generateHtml($this->amount, '&gt;');
        }
        $html .= $links . '</ul>';

        return $html;
    }

    /**
     * Для генерации HTML-кода ссылки
     *
     * @param integer $page - номер страницы
     * @param null $text
     *
     * @return string
     */
    private function generateHtml($page, $text = null)
    {
        # Если текст ссылки не указан
        if (!$text) {
            # Указываем, что текст - цифра страницы
            $text = $page;
        }
        $currentURI = rtrim($_SERVER['REQUEST_URI'], '/') . '/';
        $currentURI = preg_replace('~/p[0-9]+~', '', $currentURI);
        # Формируем HTML код ссылки и возвращаем
        $html = '<li><a href="' . $currentURI . $this->index . $page . '">' . $text . '</a></li>';

        return $html;
    }
    /**
     *  Для получения, откуда стартовать
     *
     * @return array с началом и концом отсчёта
     */
    private function limits()
    {
        # Вычисляем ссылки слева (чтобы активная ссылка была посередине)
        $left = $this->current_page - round($this->max / 2);

        # Вычисляем начало отсчёта
        $start = $left > 0 ? $left : 1;
        # Если впереди есть как минимум $this->max страниц
        if ($start + $this->max <= $this->amount) {
            # Назначаем конец цикла вперёд на $this->max страниц или просто на минимум
            $end = $start > 1 ? $start + $this->max : $this->max;
        } else {
            # Конец - общее количество страниц
            $end = $this->amount;
            # Начало - минус $this->max от конца
            $start = $this->amount - $this->max > 0 ? $this->amount - $this->max : 1;
        }

        return [$start, $end];
    }

    /**
     * Для установки текущей страницы
     *
     * @param $currentPage
     *
     * @return void
     */
    private function setCurrentPage($currentPage)
    {
        # Получаем номер страницы
        $this->current_page = $currentPage;
        # Если текущая страница больше нуля
        if ($this->current_page > 0) {
            # Если текущая страница меньше общего количества страниц
            if ($this->current_page > $this->amount)
                # Устанавливаем страницу на последнюю
                $this->current_page = $this->amount;
        } else
            # Устанавливаем страницу на первую
            $this->current_page = 1;
    }

    /**
     * Для получения общего числа страниц
     *
     * @return int число страниц
     */
    private function amount()
    {
        # Делим и возвращаем
        return ceil($this->total / $this->limit);
    }
}