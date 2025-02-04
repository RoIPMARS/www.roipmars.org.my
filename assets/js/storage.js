// import * as Minio from 'minio'
// import { createClient } from 'redis'

const minioClient = new Minio.Client(minioAPI)

const redisClient = await redis.createClient(redisAPI)
	// .on('error', (err) => console.log('Redis Client Error', err))
	// .connect()

// await redisClient.set('key', 'value')
// const RedisValue = await redisClient.get('key')
// await redisClient.close()