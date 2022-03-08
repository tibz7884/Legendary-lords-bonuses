SELECT legendary_lord, 
       race
FROM race
     INNER JOIN legendarylords ON race.id = legendarylords.race_id
ORDER BY legendary_lord