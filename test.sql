//for find college in the rank
SELECT `RANK`,`community` FROM `d2021` WHERE `college-code`="335"

SELECT `RANK`, `community` FROM `d2021` WHERE `college-code` = "335" ORDER BY `RANK` DESC;

SELECT `COLLEGE-CODE`,`T-mark` FROM `D2023` WHERE `RANK` = '45' UNION SELECT `COLLEGE-CODE`,`T-mark` FROM `D2022` WHERE `RANK` = '45'
    
     UNION SELECT `COLLEGE-CODE`,`T-mark` FROM `D2021` WHERE `RANK` = '45' LIMIT 25;

// old method to fetch where rank = college
SELECT `COLLEGE-CODE` FROM `D2023` WHERE `RANK` = '$G_RANK'
                UNION
           SELECT `COLLEGE-CODE` FROM `D2022` WHERE `RANK` = '$G_RANK'
                UNION
           SELECT `COLLEGE-CODE` FROM `D2021` WHERE `RANK` = '$G_RANK'
                LIMIT 25;