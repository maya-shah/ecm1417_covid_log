SELECT Users.id, Infections.date FROM
Users INNER JOIN Infections ON Users.Id = Infections.user
INNER JOIN Visits ON Users.id = Visits.user
WHERE Visits.date BETWEEN DATE_SUB(CURDATE(), INTERVAL <time> DAY) AND CURDATE()
AND EXISTS
(
 SELECT * FROM Visits V
 WHERE V.user = <uid>
 AND SQRT (POWER(V.X - Visits.X, 2) + POWER(V.Y - Visits.Y, 2)) < <distance>
 AND (Visits.date BETWEEN V.date AND DATE_ADD(V.date, INTERVAL V.duration MINUTE)
 OR (V.date BETWEEN Visits.date AND DATE_ADD(Visits.date, INTERVAL Visits.duration MINUTE)))
);