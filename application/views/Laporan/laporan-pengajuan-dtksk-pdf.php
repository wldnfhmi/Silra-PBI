
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title . ' ' . $laporanById['nama']; ?></title>

  <style>
    * {
      margin: 0;
      padding: 0;
    }

    .container {
      margin: 0 40px;
    }

    .heading {
      width: 100%;
      margin-top: 25px;
      padding-bottom: 5px;
      font-size: 20px;
    }

    .heading span {
      font-size: 14px;
      font-weight: 300;
    }

    .satu {
      border-bottom: 5px solid;
    }

    .dua {
      margin-top: 1.5px;
      border-top: 1px solid;
    }

    .top {
      width: 100%;
      font-size: 16px;
      padding: 0 40px;
    }

    .alinea1 {
      width: 100%;
      text-align: justify;
      text-indent: 30px;
      padding: 10px 40px 5px 125px;
      line-height: normal;
    }

    .data-diri {
      width: 100%;
      padding-left: 135px;
      padding-right: 100px;
      line-height: normal;
    }

    .alinea2 {
      width: 100%;
      text-align: justify;
      text-indent: 30px;
      line-height: normal;
      padding: 5px 40px 25px 125px;
    }

  </style>
</head>
<body>
  <div class="container">
  <table class="heading">
    <tr>
      <th rowspan="2" width="120px">
        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEA3ADcAAD/2wBDAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRT/2wBDAQMEBAUEBQkFBQkUDQsNFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBT/wAARCADPALADASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD9U6KKKACiiigAooooAKKKKACiiigAoopKAFooooAKKKSgBaKKKACiiigAooooAKKKKACvkj9qDxd8WLz9oT4f/Dv4aeMLbwk+t6TeXs0t3aRzRloSWycozcgEcetfW9fLPxQ/5SCfBr/sXNW/9AegDm/+FO/tcAnPxy8O59P7LT/4xSH4Pftb84+OnhzI6/8AErT/AOMVg/Fr4keJbf8AaX1Pw9Za5fWtmZ7W6WCOdljVIraSR0C56OQMjHOK8wtPGfjO6+H3ii7HjLWUntYdP1UOLlt+6ZnjkjDA/KvzA4/2RXmyxqjJxS2/Q+9ocJ16tCFeVRJNJ/ee2/8ACnf2uOo+Ofhw/TS0/wDjFH/Cn/2tun/C8/Dn/gsT/wCMVifB3xZ4l0v9o5PD1/4k1HVNKFmbNFup2ZXlW3ilZyucbuTz7muE8dap4x8L3vja3tfG+uXM1vrMGl2u+6cYDjzSw54IC7eO2apYtcnPbqY/6sVPrH1d1Feya07nqx+Dv7XH/Rc/Dn/grT/4xS/8Kd/a35/4vp4c/wDBWn/xivKv+F6+J/8AhLtDtG12/AvodFuCv2htpIRfNUjPR95Leu3ms6y+I3jJPhzrmqS+MrzZqC2ty8i3+Z7WQ3RRyiKdyIUI7YPAFZ/XoN2SOz/UzFKKlOaV7fiey/8ACn/2t84Hxz8O/hpaf/GKP+FO/tcE4Hxz8OE/9gtP/jFeb+H/AIoeIdM+NVlbWPjDVNT0+NLcJDcSuY7i3NiWeV1bgNkK3POSTXPeHvjZ4t8P+CdNub/xFqNzcQ+IIJJpJrh2ZraS237Cc/d5zj1o+vQ6oa4MxUvhmun4ntP/AAp39rjIH/C8/DmT2/stP/jFH/Cnf2uM4/4Xn4dz/wBgtP8A4xXm/gb4heM9e8aeDZ18VXEb2Uelo9vd34jju0m3eeWDsPMkIwABk9K6X4jeLvE8Xx08ZI3im+0p7OxlmtdNaZ0hnt/sTYaIAY3rJ83X+Ensa0jjIyjzJdbHFV4XrUa/sJVFe1zo/wDhTn7W7HA+Ofh0n/sFJ/8AGKRvg/8AtbA8/HPw4D/2C0/+MVzPwP8AH+sTeJvAe7xVqmsw3Wn3896t3PIV84KuUIY/NsJ4Pua810fxh408RaCJZfGmtW07a1awqUu3z5N0OO/RduQPc1LxkbJ2NKfCtWU5RdRJRtrbu7HuP/Cm/wBrjr/wvPw7/wCCtP8A4xWb4n+G/wC1p4Z8N6trU3xs0GaHTbSa7eOPSo9zrGjMQP3PUhT+deW6h8VfGOjx/Ei2/wCEm1OQxqrWMhuXzGsV8kRK8/LuB5x1zX0L8H/G1/46/Zy+J+p3t7PfCUas0LTOWMcZgJWNcnhVBwBWlLFRqy5EtThzHh6tl+HeIk043t+Fz0z9k3xtrXxI/Z38EeJvEN59v1rUrNpbm52Km9hK6g7VAA4A6DtXr1eC/sKf8mk/DX/sHt/6Okr3qu4+SCiiigAooooAjx1r5c+J2f8Ah4F8G/8AsXNW/wDQHr6j9PWvzl/4KQW9/P8AtA/DOPTdZvtBvP7FvNt9pszRTIBJkgMCCMjg/U1rRpSxE1ThuzmxGIhhaTq1Nkeo/Fj4B+M9d+POo+KtK0pZ7JrqzWO4MyAmEwvHcNgtn5cjtk9q5Hw7+zZ8Qz8N/G1ldaGsGoXFrYWFlbrcxk3Agly8mc4AKkHkg+3SvlsaT4z/AOir+NP/AAbTf/F07+yfGn/RV/Gf/g2m/wDi69r/AFNxjk58pUfFvD06EcMpK0bJadj7K8FfAXx7pHx2svFd1YONLXU7jdGZ4yqQm3Eayj5s5Y4G3qNoqr8Rv2d/HfibxZ4gaysXtbO/8RRX0d5HNHuWBbcpvCluoY9OtfH39k+M9v8AyVfxmB/2Fpv/AIul/snxp/0Vfxn/AODab/4uhcG4zl5Labmf/EWMN7dYhtcyVtj6U0P9ljx/NfaFeXmh+RJY3OnRyE3MZIhjWUStw3OP3fHfPFUrH9mL4lWWi6rbf8I3EZ4oILaDFzHtujFd+ZvPPAKHv2UdOlfO/wDZPjT/AKKv4zz/ANhab/4uj+yfGf8A0Vbxn/4Npv8A4us/9SsWuh6EvGWnN3lJfcfUmt/AP4l6x4iv9cXwxHa3Vw1vKsMNzFtRhZSROo+boHZR75zWLp37JfxBaFtPvtMae2mFu7TPPF+7YWcsZX73Ox3VRj09K+eYNB8b3MhSP4qeNHO1mwNWmPCqWJ+/6A/lUf8AY/jReP8Aha/jMf8AcWm/+LrNcG4iUuW3vepa8YoU4LlaS227H0/pX7NHxA0/xN4Rk/sCOSCE6VcXVwbmPNs1u5EijnkkNnjsK6v4ufBP4heMPi1fXMOmfbdGWOWWyvzcIPKDWZjNuFJyN0mDzxyTxXxr/ZPjT/oq/jP/AMG03/xdH9k+M/8Aoq3jP/wbTf8Axdb/AOpuM5XBR03OCXi5hp11XbTklbbufVeifCH4saP/AMIjPF4Qgjn0qzuNNkWO7iH7t1QCTO77x+Y8VmeG/wBmH4jaHDbQz6Y9wrXelXTlp4/3QiL+Yg+bnYGGMdcd6+aP7J8af9FX8Z/+Dab/AOLpP7J8Z/8ARVvGZ/7i03/xdL/UzGXvymv/ABF/DJSira76fM+kbr9lz4kS3Go3EmkyT/2kJQ9u1xFiEG+jlAB3chlUsfTpXuHwz+Gmr/Cv9nX4k6Vqtr9lLQ6rLbjeGDQmEhG4PcDvyK/P/wDsnxn/ANFW8ZD/ALi03/xdUdd0vxguiagZfih4wuYhbyF4ZdVmZJF2HKsC/IIyOe2aI8I4vDXq22ObG+KOHzemsJNqza2XU/TD9hX/AJNL+Gv/AGD2/wDR0le914J+wp/yaX8Nh/1Dm/8AR0le914clZ2Z0xkpJNBRRRSKCiiigBvevzw/4KIf8nGfDL/sCXn/AKEa/Q/vX54f8FEP+TjPhl/2BLz/ANCNexlP+/UvU8DPv+RdW9DxMdaSlHWjBr+iI/Cj+S5bsXle2KXYzRl8HbnG7t9M+tbvhXwffeKr6GO3XbbtMkTzHou7JwPUhQx/A16r4q8B6Pa+IvD9hcSQ6doFrATI0jhDNIW+7nuzBRn2H0r8xz3jzL8mxSwjfNKzbS6WPvMp4SxmZ0PrFuVXSVzxCO3lmUskbMo7qCRS2duLq6jhMqQb22+ZISFH1OOlfRHjL4h6H4H0U2mkJbS3rLtht4FGxMj7zcdB+tfPV/qE+qXr3NzJ5s0hyzYx+mKx4V4pxvFFCrXVH2cFpFv/ACNeIMgw2Q1adL2vPLqj07wN8O7nSdRkur8wywNAyJ5bbs7gAT06bSfzrktd+H19oFvJc3VxapADhP3h3P6ADHU12Pg7xJbeGfB9pJql058+VvJj+8yoCFyB2UEE/jXL/FKZrnXoZ0ufPs5oFkgKtlQOhA/EfrX5rkGP4jq8U1aeIl+6bte2jt2Pus4wuSwyCnOjG9Ra2vqr9zA8P+GtV8WagljpGn3GoXbf8s7eMuRyBk4GAASMk1Y8YeDdU8B65LpGswrb38Sq7RrIr/Kwypytezfsw+LovBfhP4k6oPIW8stNF3C0x5ZkWTauP7pbb+Yrz34E/DbWP2ivF/iPWNa1zyYLcRz6heTDfIzOW2hRnAAVH9hgcHt+wYviKpgsf7CrH3F1Pzelk9PE4Wm6LvUl07I8/wDu9OKXhea3vHy+GLbxpqll4SvZ9R0e1ZUS5nIPmNtG4qQOVz0OO3pWCTnA6CvsMFjaWOpRq0noz5fEYeeGqOnLoJ/DWf4g/wCQDqf/AF6y/wDoBrQ/hrP8Qf8AIB1P/r1l/wDQDW+L/gT9DTL/APeqfqj9Ev2E/wDk0v4bf9g9v/R0le8jrXg37Cf/ACaX8Nv+we3/AKOkr3kda/mqr/El6n9e0P4UfRDqKKKzNwooooAb/FX54f8ABRD/AJOM+GP/AGBL3/0M1+h/8Vfnh/wUQ/5OM+GP/YEvf/QzXr5T/v1L1PAz7/kXVvQ8U/h960NB0W78Savb6faJvnmbaPQdyx9gAfyrPz2Ne3fAvwq+nO2sXK4a6t2Fvu/uBwGb8wPzr9K404ijw7lU66f7x6RXmz+fOGcmec5hGk17i1bOq0TT7fwX4J0YxQNcOrC4ZY1y8jNG5PHrg4/AVHo+la5d68de1jRbGV2XbBGshNxbpnIAz8pPPqOpqDS7G08WXi3E+vKbPT2ZLa1sbjZt+Y4ZyCDnG0fgaxfid8Qms1TR9B1K4u76T5XeHawUHsGC5LH2P69P4pw2HxmdZg6MNalTWUnf3Uz+oa9bDZZg1VnpCHwpdWL8UPiRoXly6ZLoy6jfx8f6VtKwsfUqScj0B/GvDJGEkjMQqgnOFGAOegHpWy3hDX5GLNo2oFjySbdyee5OKb/whuu/9AW//wDAd/8ACv7B4Ty/KuGcEsNCtdvfU/m3iLG5hnuKdedKy6aGVJPLLtLyM4UbVLHOAOgHtQ1xI0SRtIWjQkqp5AzjOPrgVq/8Idr2Mf2Nf/8AgO/+FH/CG67jH9i3/wD4Dv8A4V9oswyuL5lOKPmfqePas4sx9x2suflZdrDsR1wfbiu4+H/xITwF4P8AHWlRWbSXHiDT/scUsbbRE2HUs34SEg9to9a5/wD4Q3Xe+jX/AP4Dv/hUN34Z1awhaa50y8t4V6ySQsqj6nFceLrZVmMXCc1dm+GpZhg5KpCD0PXfgD4Q8C+C/g7r3j/x1pf9pSw3gt7eF/m3BQhUIuQCWdjnPZT2znyHxJ4ssfGviTU9V07SIdDs5Zcw2Nv91FwAO2MnBPAxycVHfaxq2seF4fC326QaQt19qS1UDb5pXbknqRj1Pc19FeMG+EP7PvhDRPD2t+F11vxVJYCe4WEBn8xlILSSkjALBtuM4wCB0NfEw9rw7jYuTvSex9K4wzfC8sbR5N33Z8z+vaqHiE/8U/qf/XrL/wCgGr6yLNmRF2I3zBc5I7gZ9qz/ABB/yAdT/wCvWX/0A1+p1qirYR1Fs0fF4OPJjILs0fol+wn/AMml/Db/ALB7f+jpK95HWvBv2E/+TS/ht/2D2/8AR0le8jrX85VP4kvU/rqh/Cj6IdRRRWZuFFFFADf4q/PD/goh/wAnGfDH/sCXv/oZr9D/AOKvzw/4KIf8nGfDH/sCXv8A6Ga9fKf9+pep4Gff8i6t6HkGj6VPrepW1jbDdPM21R19yfwAP5V9AeIr6x0n4f6GjXslglxBHaJJAhaTa0Y3AAfQfl615b8FYg3jyykdMogcFuwLIQufrn9a9SuJtOs/iPBZvFd39zaxvLa2sMQaODzCrM5Jbg5BxkdCK+S8UMyeJzWGEl8NKPNofLcC4NUcBLELeo7Fq+1TRPBvhKSXTtGaSGGHI862Ma5PALs4Gckjpk815L4X1q4Sz8V+JiVOqwxxrDJtBERlfaWUY4IUYHpXUfHrWr1o7HT5StvFITL9nVgzHHAZz7kngehzXD+Gf+RD8X/S1/8ARhrs4LyOnSyX+0qq96rJfdc5OJs1nUzT6lTfu04v77FD/hO/ETZJ1vUP/Al/8aZcfEPV7G3E954nuLKJm2K1xesoZgMkDnsMfmKx/LCwvPI8cFtHzJPM4SNM9MsTjn688V5n8Qte0HxNcWUEGrTC3s0YbksyyPIzfMykuDgqqDkfwmv2DOZZZltBezpxc+x4/B+R5jxFjP38pKl3PWv+FtTf9Dx/5UG/xo/4W1N/0PH/AJUG/wAa+eP7P0Xtq9x/4Bf/AGykOn6N21ibP/Xmf/i6+C/tmn/z5j9x+6y8NsJbSvP7z6Xfxx4hUgjXr50ZVdXS7YqysAQwOehBH51q+EfHett4k0+C51G4vrW4mWCa3upDJG6OwVgQfYmvJ/BHiTSb3R7HSl1RW1C2UxILhPJEq7iVCsTgsM7dpOeFxmu78MwyQ+LNJSRGR1vIQVYYI+deCK+9VPLcdlsqtOCU0unc/nfN8BmWSZr9XqOXs76N7NEPiKzj0vxFqdrDxFb3UkSeu1XIH6AV2/wc+E6/G74hXep+KtQup9GsovP1K6nnw2ApCKZCeBhT07Ka4/xof+Kx10Dn/Tp//RjVW0+6165sbvQdEuruMaoUjltLTcTc4J2oVAyRyeB6114vB/XMmhUteUY3R8vQrRoZk1JXjfbuegfGLQ/hho4tj4A8Rvqlw0rLPZ5aRI4wDhlkKjgEY5JzuFeQeIv+QDqf/XrL/wCgGvedS/Yn8VeEfDEWrW2oW+r37Rb7rT408toRgsQrFj5hGMdFrwbxB/yANU/69Zf/AEA1eR4qVfLJQqSu4pnVjsNOjmUJzp8ibVkfoj+wr/yaT8Nv+we3/o6Svee1eDfsK/8AJpPw2/7B7f8Ao6Svef4a/Han8SXqf0rQ/hR9EOoooqTcKKKKAG/xV+eH/BRD/k4z4Y/9gS9/9DNfof8AxV+eH/BRD/k4z4Y/9gS9/wDQzXrZT/v1L1PAz7/kXVvQxvgHDBd6xqttMOZbdSjdCCrg5B9QSD+FegeH75bTxxr9vDbzalq8jR+dPtCRQxqihQWz0JyeBzkelcR8A4YrybVod/lXkflzwyjkrjcp47j5hke9eheGL4Q+JNetFTzNXuJlnuWUExwKEVUDN3JIZgB2bnHNfj/H9Z/29i07/Cl+QuD6f/CTh35s8W+MFxJN46vEkn8+SJUR2XhQ20Eqo9Bn9Kr+G/8AkRPGH0tf/RpqL4nRpH461dEJZVkA3N1ZgoDE+5Oau+DbG41LwX4tt7WCS5nYWu2OJSzHEhJwPpn8q/ofCqlheFsHJu0VyP8AI/F8Rz18+xKWrfMYM0cV94Zs5ryJLtINXs9MjgkRGQR3AnZ3AK/fBjXnNeSyePrGHWo9H/sGzNz9ma4E/kx7OMnaV256A8579K+j/C/gXWl8LPJcaPF5P9uWMuNQdItqxxXOXAd15DPH9dw9642T4W+JC+B4M0P7Q6yxxSMLUTMvlqVUOZN3LFuh9R0r4fiDF0q2NnOjK8e5+8cIVcTh8spwn7rPLPFfjvSvB+i6FqN1oVtcHUEkYRQwRD5lldWJJXoFCcY7nmtDUtas7G30ydNKsZIL2xOoFvssYbaWkKgDbxlEXqepNa/xz/Zr+I/irS/DMWjeEN/2NLhZYbe5t0WPdKWXgy9wfXvXZr8HfF+j+GfDgvPCti01npkVvI99NbttcLNlCTLtPJTg+o9a+V+tU+RWlqfbrHYjmacjzDwb4m0/xlpqXqaJaWkUkscXlmGJmXMoRiG2eh9K9efFv8RbLT4zm20/UltYA23IRZsAEgDsPTjmn+F/hvrUUhgPhTQ7UmWPyYbdraINt2vkKsnUNk8DnH0rW1PwVrlr8VJppNMuPK/tfzfNRC6bDNuB3DjGCO9fc5FjcPSpV/bTs7aXPyrjWWKxToRguZX1OP8AGnHjDXf+v6f/ANGNSeE/FeoeB/EFprelCE6habjD9oTem5lK5IyOzHv6UvjT/kcddP8A0/T/APoxqpaZdQ6fqdndXNr9ut4ZkkktS20SqrAshOO4BH41+z4RRnlEU9nE/nXEOUMwk07NSNebxt8XdakufFc2p+I4tNupTFLewNLHaj5uUXGFABGOBXGeIP8AkX9T/wCvWX/0A19H2H7b2mX0jaDqvgO3i8IzR+R9jtJA8iZ6/LhVIJyccY9a+e/G0trNZ+IJLGJ4bJ47hoI5DlljIYqpOeoBHfqK+M4bcFQxEIJ9dT6fHKDxFCpGrz6rc/Qf9hP/AJNL+Gv/AGD2/wDR0le8eteD/sJ/8ml/Db/sHt/6Okr3ivzqp/Ekf0VQ/hR9EPoooqDcKKKKAGDqK/PH/goh/wAnHfDH/sCXv/oRr9D/AEr89P8AgowoX45fCO7UgpLYanBuHPzKUyM+uWNerlOmNpPzPBzxXy6sl2MD4CrHPrd/CsvkXoiWWGTqPlJDKRnkEN69vavTNHvvsPjTVbWSMDVdS2SmNOVjjjQIXZv7pIyO+WI968T+E1wtv44sFM5t3l3RxyjkBiOAR3BI2/jXs3iK6fw34vttbuIlaS5tV0uKKM8SStIGUg44AAOc+3Wvy7xLwcqefVU/+XkLr5HBwPiFPKYP+SR5J8atPWx8bSLEhEbQxncedzY+Yk+pP862vgfH5tp4iUAk7YP4Wb+JuysD+Rrb+Pfh+SbT7G+jXebVWM745+dlAP55rG+BcayW/iFWuVtV2wfvW2ED5m7OCvPuO9fZ/wBqLMPD5cr96Fk/kz5p4H6jxg3Ne7K7X3HrvgfTbf8A4SCSWeI+dDZTTW7sjoAylGkADvINxhEwzt7t612l9bLtlhkjQg5Vka6gXPOCpWO3WQj2G2vP9NvF8N6pZ6rBqkOoy2cnmfZC1tEJlIKum4IMbkZh1711Nn8QNOW0iiuZpi6oodt7YLAAE4XUNvUdlx7V8Xw/jofVuTEb+h+qVa1CEvdkl8zZ8CfC3wx4j1u9tdZ0y+hmW3WSKOO4ubVPlch8IknynEkXDcnINYeg6PYWe+606xkgs5ZJDBLcyOr+WXJVfOcOrYUj5ZFyMdqxvFHxCtLPTbRtP1Cwu5YtRs5FtrjEAhVbuCVnC7VjODEudjHILd+a19P8baPaxqo1D7aI0WNJowyttUAKC3mW8h4A4J29cCvrJfV6SU7HIsbRbtzr7zoTp9jeWc6anbrNpvls90qywOPKRTI4zFAvUJtzv43DivKtJsJI2s/MVi6lNzNBNnII5J83Gc+1dZrvjqLU7OewtZ/KjvIzBJcTSpmBS6OzfvLmbduEYXGBjcfeuftrOBbqIjXY5TvU7NtqC3I44jzz04NfnvEOMdSrCOHvbroddOpQnF88k/mfOfjIf8VhrmP+f6b/ANGNSeEpNCXxNp7eJ7mW00LzM3c0KMzhQCcAAE8kAcDPJpfGXHi/XP8Ar+m/9GNXZ/B34V+F/ieuo22v+Lrbw9LGUWK3Z0WWUHGWG8jjoOO5/A/1zRxSw3D9ObdnyJfgfyxUw88RnE4U0n7z3PY7LwF8Fvi94L1TRfh0tiviTT1M8NxKkkU5O7O5mdQzoc7e4G4dDivkPxNGYdF1aNxhltplYfRGBFev/Gz4Ct+z74s0fUfDutX5sLuN2guN+2eKRMBlLoACCGB6DuOcZPjXiqTyvDGsyN2s5j/441eVw5TqxwVarU2dz2MzmpY6jSlTUZxavbZn6K/sK/8AJpfw2/7Bzf8Ao5695/irxD9i23Fn+yz8NLc8P/Y0MxXvhyzA4/E/lXt5r8xqfHL1P6Ho/wAOPoOoooqDYK8n8H/tAaR4o+NfjP4Zz27aZrvh/wAmSDzZAV1CF4Y5GePgYKGRQVyeCp716xXy94p+Etj45/aE8daVLeXGha5Pp2l+JdC1yxwLmyuYxNayOmR8ykJEroeGDYoA9a+OnxCvPhz4Dln0aBbzxRqlxFpGh2cn3Zr6dtse7/ZT5pG/2Y2r89/2gNJ1LTPgX8J73V76TVtX8LeN9a8P6lqUoO+Z5LuZjK2T/GEDcn+IV9heENB+Jviv42eGX+JGiWMVj4N0+8ntNa0uXNpql5MY4UmEZO6F1h8/KN0MhIJFeT/tLfD6bXvCv7QHgW3i3XjCz+IOixj7zYRY7oL7h7Z+n/PcetdWFqexrQmujRw42j7fDTp90z5stpmtbiOVGIeNwwIJB4IIIP4dq+nNTtT4y8H2FxbTCUhobyGcqCyspB5GeSACpwR1P0r5M8M6wniLQbDUYzkXESs3s2MMPzB/Kvbvgd4g1BpLnSLa+hRv9bFb3aFkb+8FIIII4Pfqa9DxNyWWY4Cjm1B609X5o/JuCcyWX46tllbae3qehx3sXxA8B3czoYo9QdoEXqygSbFz75GfxryfwXCvh7Xtc8ManItq92BCkz8L5iNuQk/3WBPPuK76KG98IeKtEsLlBFpd7ezXDNG5aITMpCoDgYGSTtPrUvxY8H2niLw/qOpWwX7fp7M/mLjJVVUuh+gyfwNfh/D2ZQy+s8sqO9DEO6fZ30P03PMA8wo/XI6VaKs/NHGajpd1pNwYbqBoXH94cH3B7j6VVrB0H4naxokK2kzR6nYDg2t4u9QPRTnIwPeus0/WvC/ifAiuG0C9b/ljdHdAT6B+341+x18rxmVpe3o80P5on4ZKFPGNvC1rS/lbKNFbVx4P1aDDJatcxNystuRIre4I/rSr4TureE3Gpyw6RaDrLeOFP0C5yTXJLGYVpW18rHJHL8e52d1530MStrw7p5juF1W7zBplkRPLOwwp2nIUepJA6etZN9488PeHwU0mzbWrsf8AL1eArCD6hOpH1/OuJ8TeOtV8SKW1K7ZreP5lhQbY0wOyj0Fehh8jxmZLnlS9nS6t729DrhVpZfK9Stzz6JC21rL438ZCCOSG1n1S9wrzttjRncnLH05/Tiu/+Kn7HPirwn4Vv/Ekeo2WpQWEZkkt7cOJPKHLOMjqBnj0B57V29r+x1pfxB8F2up+FvG0N2JrcOZHgDxvLwQBggoOxDAkfpXCfBL41X3wzvfFPgbxwLzUtFkSezkgkYy/Z5kDKyDn7r8r1xnB9a+hzHGLGeyy/Da00kjsw+BhhebEY5Wc78rucxcfFzXvEnwq0nwbrEaTxabcLLb3juTN5aoyrG303kA56bR2ryX4pX32LwHq7Lw8sfkIB3LsFwPfBNdW23exAwM8Cq/hvwm/xS+Nvw38DxRebHd6rHqF6vZbWA+Y5b2IVh+VfdVqFLJ8plCHVHhZX7XM83pqTvZ/gj6mh17X/gn8RvCl9azN/wAIh4M8FaDpPimx52iK4knX7SPeFkRjx9xnr7VluI4bdp3kVIUXe0jEBQuMkk+gFeF/B7QbL4rWfxb1/UYRc6R4x1S40mEdpNPtovsakezMs7D/AHxXH+Avhv8AFX4s+BdB8H/ENf8AhEvBOj20en6hDb3G7UfEnkjywZGH+ot3CgsvLvk9Aa/E27u5/TkVyqx6v8C/j5pnx6/4S270W0eLSNE1ZtMt75pMi+VY0czKuOEO/jk5GD3xXq1eI/sq6dar4Q8U6vY28dtYat4n1GWzjhUKgtoZBaQhRj7oS2XGPUV7dSKCvFvi83/CG/GH4XeNB8lpcXM/hbUJO3l3aq9uSfQXEKL/ANta9priPjF8PR8UPhrr3hxZvst3d2+6zuu9vdIwkglHusio34UAdvXzN+0t4mbRfil4Al8G2kfib4kxm4s5PDcbEC50u4jxK1w+CIo0kSJwz4+6wGc1Tb9pTxH4+0v4feDvCsVpofjzxVbXUd9qWqYaHSZrMiO9RIs7pp1fdtjOBj5icV7H8K/g7oXwj0+6Nk02pa1qD+fqviDUnEt7qEuPvySeg7IPlUdBQO19D8sNQ+HuufAX4lax8PPEq20dwVXVNPezLG3eGUZZIi3zFUfcvPPymtuxvrjTbqK5tZmgnibckkZwQR3Ffan7anwB/wCF9fD+28QeE2jl8c+GGa502SIhjcp/y1tiQf4gOPcY7mvgzwr4mj8Uab9oWNra6iYxXVrJkPBKpwyMMdQR3FfqvD+NpZhhXgMRrpbU/COLsorZfi1mGHVu/qfUvhmaX4l+HoWu9Ts7uKNlaSL7MyTRyKcjJDjBz3FZVxNrPgiz8T6bqEUl/Z3sFxdW99GpKhmUhlb06j8q8S03Vr3R7gXFjdTWk3TfC5U49CQelXX8WavJqEV9LqE89zH915nLjBGCpBJ4IJGPc1+ff8Q1xFDHzq05xdG91G2qO/8A14o1sHGnOLVW1m+jMj+L2o3HOAa6ZrfRPEmZIp00K/b70M2TbOfVW6pz2Ix6GiP4ca9cM/kWPnxKjSefDIrxEDk4cHGcY4zX7HHNsHh6PJjPc5VrzH5pLLsRWq82G96/YxrHXNS0tStpqFzaqf4YZmUfkDUV3qF3qEnmXVzNcv8A3ppCx/MmumPwp8Rq+z7CN27b/rUxneE9em4imj4X+Im2/wChAbgCP3qdw5Hf0Rv0rxaedcMe09pCpDm+R6E8qzxQ5ZQlY5NQcGqOsSFdNmxxkY/MjNTNeKWKxK07Dj5Rx+JpRA0jBp8HHIjHKj/E19NiakMdQdHD68y36HzPJKjUvU3R237KPxWb4ZfFK0W8vHt9D1JTaXik/uwT/q5GBOBhsfN2BaovilfabqnxG8SXmkzNPYXF9LLHNyd25iSQe4JJxntiuSWFI87UVM/3RinZ4xXjZJw6srk6lSV2etic2qYrDxwtrpMSSRIUZ5GCog3MzcAADJJPoK3/ANn/AMNfEyx8O+M/jd4U8PQ6xZXlndeH9P5f7baQAKGvoI8fvQrBsoPmOGxnmuV8O+BtY+P/AMR7H4aeGS8Yn2za5qaAlLCzBG8n/abIABPOQO/H6y+C/CukfD7wrpPhjRII7PTNMt0tba3Uj5UUYyfUnqSepJr5jinNY1prC03otz9b4JySWHpvGVY6vYwfgTN4UPwl8L2/grUYdV8O2llHbW9zCcl9igNvHUOWyWDAHJOasfGzx1/wrX4U+KPESDdd2dk4tIwMmW5cbIIwPVpGRfxrz34lfCu++G+pat8TPhpfWmganHG15rmh3rmPStZjRSztIB/qZwoOJlH+8DmuftfiLb/tReJPhVYafZz2mhpaw+ONatrjaWjCllsLdyDg75g0vPVbcHvX54fq57T8HvBP/Ct/hf4W8ME75dM0+GCaTrvmCgyOfdnLN+NdnRRQAUUUUAfBH7WX7Pnjyz/aE8EeK/hnZm4fVNSku48uUh0zVBHG0lw5A/1U0NsAykclG7sBXvmueNtS+OP7OOq6h4WiuLDxBJC1rfaYrBbqzuonC3NqfRxh1GeuVPevdzj0zXgfxM0u/wDgf44u/ij4ftZb3wzqCqnjHRrVCz7VG1NRhTvJGOJFH3kGeq1LXMmjajU9lUU+x5X4D+JGgfAnxDY2+maZq0Gl65bRy3Gh3ETi607yjIslzIjEk7wEO1eoRjzwKw/2rP2UZ/FN0/xh+D8cd1q91ELjVtCgIEWrxkAiaIf89cHOP4uD97Ib1r4h/CvStcvh8UvDCR+I7S8tEvJLW2Jka7MSFreS2kU5RtwVSAcMpYEHv5P8KfjF4w+FOra1N4njvtRsI5/Kv7NJUlxfTPG8UNqmQwIjkO5Pu/ISPfDD4qrgqqknbsfUY7KcNxBhHKmryS1T6nyv4Z8WWXiaCTyt1tewNsubG4UpNA44Ksp9Dn8vWtlnCKSeAOcnivsX4rfsufDz9q/R4fHnhG+bwl4wlDBdYs4ihldSVaO6h43EEFSfvcc5FfHPxI+HvxI+BMklv8RPCs15o6nCeJdDUz2bgHhnGAY/+BAfQ1+yZbxTTr0+Ss7S6M/lnPuB8Rg6rnhlddV1RXF4ZsiCIyjpuPyr+Fdj8MvEn/CNaxeXN9deRFJZyRRrCjE+YcbT9eD2rgtE8TaRr0IOm38FyMZ8uNgGH1XqPxFa2016GNyjDZ7hpUcTUupdj4rC4jF5PiVVhBpx7nv03xe8PzTAtezMvm7uYnxtE6MD06BQfyoh+LvhdTFvZsqFBYROCMCUEfhuH/fZrwHpjJ5pD1GDX51HwhyWm1JVJaeZ9xLxDzSaacF9x1y2/hDVmIS4v9Dlb/nuq3EPtyoDY/CqeueB9R0W1F8jQ6jpjHC3tmweP6N/d/EVzjNtBJOAOTngVlt8YLbw20umaZf3Go3l8PIOm6Wpnkmzxt2jjJ+ueTX3bws8lUXh8R7q3T7HzNO+byanQ959Ua3vjisvRLLxL8WvFyeCfh1Z/wBqa5Lxdahz9l02Mn5pJHxjIGcep4GTxXqnwt/Yx+KXxwkiu/Fob4aeDpMFrVsNql0h5wF6RAjj5iDz9019k2Gj+Af2Sfh3FpfhTQxG8k8dvFZ2xDXd/cvkIZJGPJOGO5jgAHHHFePm/FKlB0sM7eZ97w7wNOVVVMUrvoiP4E/BHwz+yj8OX03T2Oq+ILwNcX+oSFVudUulQttXJ6ABtq54GSTyTXgdj4m8b+NviXB4u8N3skNzrF4lvDbR2sk0sEUbRiW1uS3yQIh3HI+Zyc1peLvFGq/GTxvpqRah9mW8mRdKmt9sx0PVoo97QSPGMOkiE5PI4PZa9Ft7i9/Z48OTxSLbeJ/il4zvmfT9HsU8uKW4KKpfHVII1UM8h569yBX5ROc8TNPp3P6NoUqOSUHzJObVrGH+2z4w8SeLfB+s/DjwNp0mt3trpo1jxQlvIVaPT1YFbVWA/wBbNtY7RyUjf+8K739jj4M33wh+DumDxAu7xbqlvby6lkYMCxwpFb2w/wBmKJEX3Yue9dt8Gfhafhh4bnW/vW1nxTq051DXNYdcNeXTYDEDtGoAVFHAVR716LXcfIvV3CiiigQUUUUAFRvGsilWAZSCCDyPcVJRQB85an4b1v8AZj1e81zwnp1xr/wvvJWuNU8L2al7jR3Ykvc2SD70RJLPAOhyV7ipPFfww0H44aTo/jf4da7pySi6/tSG4jhE9pdzlBHulTIPmIFAznKnORX0Lj2yK8Q8XfAXUdA8RXni/wCE+qw+EfEV2/m3+k3KF9H1dvWeJeY5D/z1jw3XINZzgqiszpw+Kq4WanTdj56W18d/DHxn4S0O5k1XTNFt9aVBfLiOLVZpHMlxJJhuEIJCqQcjcScgge8/Bz4+6l8SPF2uaBqui29tb2YlPmRzFmRA+1FkVhyJE+cMhKkZqOy+PHh7Ur+38L/Fvw8fh94kZ8QxaxiTTrpwMb7W8A8sk5+6xV+cY610Xg34B6F4AbV9U8Mzzz3l5ZC1tGvLkyxQRLkxxocZCbj6k4rljSnTa5JaH0lbMcLjqTWIp2qdGvzPLvEnwD/Zp+PTG+TTNKsNSmupLQXujynTZ3uFALKFG0OwDKeVPUda4jVv+CZ+nKXPhX4teIdIhH3YtQhivlT0GMx1Bo/7LvjXwn4o0iR7SO6tbG5S6gkhlVkWcWK+bI2cH5p4o1HHQE965e31bxB4U8M6re6RL4j02/g0Jzr9zemdAL9pYwhUvxvGWwU42n6100sxxNF6XRlX4Wy7GW9nUjK/dGhN/wAE5fiFF/x7/GPTp06BptA2nH0Ep/nU9n/wTb8ZXTY1H41RxR91sdAXcR7MZuPypurfFfxTY6C9ppXjLUL7RU8QwWtvrU11HHJJG1sXljMzJt2q/wDEVPvxUfjT4jeNLHWLE2XifVXsrfS7O9lvIb6OaOENdPHJLII02zqMBflA6V1/29i7W52ebHgHCc20DuPD3/BMv4eQyxy+LPFfibxgwOfIuL0W8Deo2oN2Po1em+G/+FGfs8at/YHhvTtB0XWyRCYbNFe8dyuVjeQ5bc3YO3ORXhmnXPj+b4nWjhr/AFrw9H4zVgy+ZIbYMoIP/XIpKPYbD+PoHxC/Z18V+Jfi7rPiDSJIre2aWw1K1W7kU2s1xFlHSRBlshdrBgOv6cVXG4iur3b16ndQyDL8DUUa00la+n5C337Xmoa9oN3rmg2lraafptzazXEMkyz3UlmZdsxZF4ibBUjLE4ycCszxB4Lt/jl8VJdT8Jao0+k6hGn2rWLIB00/ULXa0MvJAcMkhTCnnLehx2Vp8F/BvwZsdT1jxr4x+z+HJpLhzpl9OkFiqzEloynWUgNgZJ7YAp2leN/GHxSsotH+D/h8eCPByjZ/wmWt2Pk5j9bGyIDOcdHlAXnoawVOdRfvGdNbHYTBzvgFr3Io77Sf2b4joOlxyfED4reIpPtEOlWiJFJMwUIssgUbba2QDl2/2sZNd98Ifg/eeF9Sv/GPjG/j8Q/EPVowl3fopEFlDnK2lqp+5Cp/Fzlj7bHwt+C/h/4S2t2+nLcalrmoMJNS17VJPPvr+T+9JIew7KoCjsK7+uuMVFKMT5mtXniJupUd2x9FFFWYBRRRQAUUUUAFFFFABRRRQBkeJPDOkeLdJn0vXNMs9Y02YYltb6BZonHurAivG5f2X7jwbM0/wr8d614AGdw0iRv7S0rrkgW0xPlg/wDTNlxXvdFAHgv/AAlPx88FjZq/gjw14/tV/wCXvw5qbWFyR6tBcLtyf9mSoJv2loLWN4fE3wk+IWiHpIX0Jb2Dt0eCRwR+Ar6BpODQNSlHZnzncftJfCbVLNLS90HXvJjbcsFz4RvSqtyMgeQRnk9PWm2v7SXwytIxFpPhHxReOI/KWKw8H3YbZksFGYgMZJOCepNfRvqKQYxilyrsX7ap/MeCp8fvFetKE8J/A7xhct0WfXha6TB7H55GfH/AKd/Yfx98ekrqOveGPhjp8nWPQ4H1a/Cn+EyzKkSnHGQhr3ukzTIbb3PHvB/7L3gzw7q8Wvayt9468TpyNa8VXLX0sbf9Mkb93F9EUV7AFCgADA6U6igQUUUUAFFFFABRRRQB/9k=" width="120px" height="120px">
      </th>
      <th rowspan="2">
        PEMERINTAH KOTA TANGERANG SELATAN <br>
        DINAS SOSIAL <br>
        <span>Jl. Puspitek Raya No.1 Kelurahan Setu Kecamatan Setu <br>
        Kota Tangerang Selatan Tlp/Fax. (021) 29666250 Tangerang Selatan 15313</span>
      </th>
    </tr>
    <div class="satu"></div>
    <div class="dua"></div>
  </table>

  <table class="top">
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="padding-top: 10px; padding-bottom: 15px">
      <?php setlocale(LC_TIME, 'id_ID');
            echo 'Setu, ' . strftime('%d %B %Y');
      ?>
    </td>
  </tr>
    <tr>
      <td width="70">Nomor</td>
      <td width="5">:</td>
      <td width="180">400.7.6.3/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- DINSOS/<?= date('Y'); ?></td>
      <td></td>
      <td width="120">Kepada,</td>
    </tr>
    <tr>
      <td>Lampiran</td>
      <td>:</td>
      <td>1 (Satu) Lembar</td>
      <td align="center" width="50px">Yth.</td>
      <td><strong>Kepala Dinas Kesehatan</strong></td>
    </tr>
    <tr>
      <td>Perihal</td>
      <td>:</td>
      <td><strong><?= $suratById['perihal']; ?></strong></td>
      <td></td>
      <td><strong>Kota Tangerang Selatan</strong></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td><strong>Kota Tangerang Selatan</strong></td>
      <td></td>
      <td>di -</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td style="padding-left: 40px; text-decoration: underline;"><strong>Tempat</strong></td>
    </tr>
  </table>

  <table class="alinea1">
    <tr>
      <td>
        Berdasarkan Surat Keterangan Terdaftar Data Terpadu Kesejahteraan Sosial (DTKS) dari Sistem Informasi Kesejahteraan Sosial Next Generation Pusat Data dan Informasi Kementerian Sosial Republik Indonesia.
      </td>
    </tr>
  </table>

  <table class="data-diri">
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><strong>(Nama- Nama Terlampir)</strong></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td></td>
    </tr>
    <tr>
      <td width="170px">Tempat, Tanggal Lahir</td>
      <td width="10px">:</td>
      <td>

      </td>
    </tr>
    <tr>
      <td>NIK</td>
      <td>:</td>
      <td></td>
    </tr>
    <tr>
      <td>No.KK</td>
      <td>:</td>
      <td></td>
    </tr>
    <tr>
      <td>Usia</td>
      <td>:</td>
      <td></td>
    </tr>
    <tr>
      <td style="vertical-align: text-top;">Alamat Domisili</td>
      <td style="vertical-align: text-top;">:</td>
      <td style="vertical-align: text-top;"></td>
    </tr>
  </table>

  <table class="alinea2">
    <tr>
      <td>
        Sehubungan yang bersangkutan Telah terdaftar dalam Basis Data Terpadu Kesejahteraan Sosial (DTKS) yang dibuktikan dengan Lampiran Surat Keterangan Terdaftar Data Terpadu Kesejahteraan Sosial (DTKS), Surat Rekomendasi ini dapat digunakan sebagai kelengkapan Syarat pengajuan Program.
      </td>
    </tr>
    <tr>
      <td style="padding-top: 15px; text-indent: 0">
        BPJS JKN KIS PBI (Penerima Bantuan Iuran) APBD Kota Tangerang Selatan.
      </td>
    </tr>
    <tr>
      <td style="line-height: 2;">
        Demikian Surat Rekomendasi ini dibuat agar menjadi maklum dan dapat dipergunakan sebagaimana mestinya, Atas perhatian dan kerjasamanya kami ucapkan terimakasih.
      </td>
    </tr>
  </table>

  <div class="pengesah" style="margin-left: 300px;">
    <div style="text-align: center;">
      <p><strong>A.n KEPALA DINAS SOSIAL</strong></p>
      <small><?= $pengesahById['jabatan']; ?></small>
    </div>

    <div class="ttd" style="height: 100px;">

    </div>

    <div style="text-align: center;">
      <p style="text-decoration: underline;"><strong><?= $pengesahById['nama']; ?></strong></p>
      <p><?= $pengesahById['pangkat']; ?></p>
      <p>NIP. <?= $pengesahById['nip']; ?></p>
    </div>
  </div>

  </div>
</body>
</html>