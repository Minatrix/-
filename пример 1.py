if velga_slave == True:
    if velga_love < 5:
        jump lonely_slave ## jump осуществляет переход к метке, в данном случае lonely_slave, содержащей игровой текст. 
    else:
        jump lonely_ideal_slave
else:
    if velga_love < 5:
        if velga_rep < 15:
            jump lonely_low_rep
        else:
            jump lonely_high_rep
    else:
        jump fin_velga_love