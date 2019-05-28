#include <QXmlStreamReader>
#include <QDebug>
#include <QString>
#include <QFile>
#include <iosteam>

using namespace std;

int main()
{
    QFile file("test.xml");
    if (!file.open(QIODevice::ReadOnly | QIODevice::Text)) {
        qDebug() << "File open error:" << file.errorString();
        return 1;
    }
    QXmlStreamReader inputStream(&file);
    while (!inputStream.atEnd() && !inputStream.hasError())
    {
        inputStream.readNext();
        if (inputStream.isStartElement()) {
            QString name = inputStream.name().toString();
            if (name == "wpt")
                qDebug() << "lon:" << inputStream.attributes().value("lon").toFloat() << "lat:" << inputStream.attributes().value("lat").toFloat();
        }
    }
    return 0;
}