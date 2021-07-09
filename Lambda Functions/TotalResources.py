import boto3
from boto3.dynamodb.conditions import Key

def lambda_handler(event, context):
    dynamodb = boto3.resource('dynamodb')
    
    table = dynamodb.Table('TotalTable')
    
    resp = table.scan(ProjectionExpression="Budget, Manpower,Tools, Vehicles")
    
    items = resp['Items']
    return {"statusCode": 200, "body": items}