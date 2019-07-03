saldo_cuenta(maria,1000).
saldo_cuenta(flora,3000000).
saldo_cuenta(antonio, 2000000).

millonario(X):- saldo_cuenta(X,Saldo), Saldo<1000000, !,fail.
millonario(X).

fact0 :- saldo_cuenta(maria,X), write(saldo_cuenta(maria,X)).
fact1 :- saldo_cuenta(flora,X), write(saldo_cuenta(flora,X)).
fact2 :- saldo_cuenta(antonio,X), write(saldo_cuenta(antonio,X)).

predicate0 :- write(mil('X')).

mil(X):- saldo_cuenta(X,Saldo), \+(Saldo<1000000), write(mil(X)).
