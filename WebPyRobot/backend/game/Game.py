import random
import imp
import sys
import importlib

class Robot(object):
    def __init__(self, tank, id):
        self.__tank = tank
        self.__robotId = id
        self.__life = 10
        self.__armor = 1
        self.__range = 5
        self.__pm = 3
        self.__pa = 1

        def getTank():
            return self.__tank;
        def getId():
            return self.__robotId;
        def getLife():
            return self.__life;
        def getArmor():
            return self.__armor;
        def getRange():
            return self.__range;
        def getPM():
            return self.__pm;
        def getPA():
            return self.__pa;
        def setLife(life):
            self.__life = life;
        def setPM(pm):
            self.__pm = pm;
        def setPA(pa):
            self.__pa = pa;

class Game(object):
    def __init__(self, r1, r2):
        self.__size = 32
        self.__map = [256]
        self.__robots = [r1, r2]
        self.__result = []

    def getTankId():
        return 1

    def getEnemyTankId():
        return 1

    def getCellPosX(numCell):
        return numCell - (self.__size * (numCell / self.__size))

    def getCellPosY(numCell):
        return numCell / self.__size

    def getCellDistance(numCellA, numCellB):
        return (abs(getCellPosX(numCellB) - getCellPosX(numCellA)) + abs(getCellPosY(numCellB) - getCellPosY(numCellA)) )

    def getCellFromXY(x, y):
        return y*self.__size + x

    def getPosition(TankID):
        for i in range(256):
            if self.__map[i] == TankID:
                return i
        return -1

    def getLife(TankID):
        return self.__robots[TankID].getLife()

    def getPM(TankID):
        return self.__robots[TankID].getPM()

    def getPA(TankID):
        return self.__robots[TankID].getPA()

    def getRange(TankId):
        return self.__robots[TankID].getRange()

    def moveTank(NumCell):
        return 1

    def shot():
        return 1