## 1)
Представьте, что у вас есть мешок риса, из которого вам нужно отмерить ровно 1 кг. В вашем распоряжении простейшие весы с двумя чашами, куда можно пересыпать рис, и гирька весом 1 г. Какое минимальное взвешиваний понадобится, чтобы отмерить 1 кг риса?
записать в виде кода

## 2)
В обороте находятся банкноты k различных номиналов: a1, a2, ..., ak рублей.
Банкомат должен выдать сумму в N рублей при помощи минимального количества банкнот или сообщить, что запрашиваемую сумму выдать нельзя.
Будем считать, что запасы банкнот каждого номинала не ограничены.
Рассмотрим такой алгоритм: будем выдавать банкноты наибольшего номинала, пока это возможно,затем переходим к следующему номиналу.
Например, если имеются банкноты в 10, 50, 100, 500, 1000 рублей, то при N = 740 рублей такой алгоритм выдаст банкноты в 500, 100, 100, 10, 10, 10, 10 рублей.

Реализовать алгоритм:
выдать 740 рублей
выдать 600 рублей